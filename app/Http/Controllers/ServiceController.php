<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ServiceUser;
/**
 * Class ServiceController
 * @package App\Http\Controllers
 */
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('users')->with("users.session")->where("team_id", Auth()->user()->team[0]->id)->paginate();
        return view('service.index', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * $services->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service();
        $users = User::whereHas('team', function ($q) {
            $q->where("team_id", '=', Auth()->user()->team[0]->id);
        })->get();
        return view('service.create', compact('service','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Service::$rules);     
        
        $service = Service::create($this->formFields($request->except('_token')));
        $this->updateServiceUser($service->id, $request->input("users_id"));
        return redirect()->route('services.index')
            ->with('success', 'Serviço Cadastrado com Sucesso.');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::with('users')->find($id);
        $user_ids =[];
        foreach ($service->users as $user) {
            $user_ids[] = $user->id;
        }
        $users = User::whereNotIn('id',$user_ids)->whereHas('team', function ($q) {
            $q->where("team_id", '=', Auth()->user()->team[0]->id);
        })->get();

        return view('service.edit', compact('service', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service, $id)
    {
        request()->validate(Service::$rules);
        $service->update($request->except('_token','_method','users_id'));
        $this->updateServiceUser($id, $request->input("users_id"));
        return redirect()->route('services.index')
            ->with('success', 'Serviço Atualizado com Sucesso.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $service = Service::find($id)->delete();

        return redirect()->route('services.index')
            ->with('success', 'Serviço foi deletado com sucesso.');
    }

    /**
     * Function of return fields for store and update
     */
    private function formFields($fields)
    {
        return [
            "team_id" => Auth()->user()->team[0]->id,
            "onwer_id" => Auth()->user()->id,
            "name" => $fields['name'],
            "description" => $fields['description'],
            "amount" => $fields['amount']
        ];
    }


    private function updateServiceUser($service_id, $users_id)
    {
        ServiceUser::where('service_id', $service_id)->delete();
        foreach($users_id as $user_id) {
            ServiceUser::create([
                'service_id' => $service_id,
                'user_id' => $user_id,
                'amount_for_personal' => 0
            ]);
        } 
        return true;
    }
}
