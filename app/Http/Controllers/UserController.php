<?php

namespace App\Http\Controllers;

use App\Http\Services\UsersService;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Facades\Bus;
use Illuminate\Http\Request;

use App\Models\Service as ServiceModel;

class UserController extends Controller
{
    private $service;
    
    public function __construct(UsersService $service)
    {
        $this->userService = $service;
        $service->getUsersJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['name' => "Listagem"]
        ];
        return view('users.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo '<pre>';
        var_dump($request);
        die("porou");
        return $this->service->store($request->except('_token'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services_ids =[];
        $user = $this->userService->getUserById($id);
        foreach ($user->service as $ids)
        {
            $services_ids[] = $ids->id;
        }

        $services = ServiceModel::where("team_id", $user->team[0]->id)->whereNotIn('id',$services_ids)->get();
        return view("users.account", compact('user','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = $this->userService->getUserById($request->input('user_id'));
        $services = ServiceModel::where("team_id", $user->team[0]->id)->get();
        $this->userService->updateServiceUser($request->input('services'),$request->input('user_id'));

        return redirect()->back()->with('success', 'O Usuário foi atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
