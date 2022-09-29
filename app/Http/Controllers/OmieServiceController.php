<?php

namespace App\Http\Controllers;

use App\Models\OmieService;
use Illuminate\Http\Request;

/**
 * Class OmieServiceController
 * @package App\Http\Controllers
 */
class OmieServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omieServices = OmieService::paginate();

        $breadcrumbs = [
            ['name' => "Listagem de Serviços"]
        ];
        return view('omie-service.index', compact('omieServices','breadcrumbs'))
            ->with('i', (request()->input('page', 1) - 1) * $omieServices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $omieService = new OmieService();
        $breadcrumbs = [
            ['name' => "Criação de Serviço"]
        ];
        return view('omie-service.create', compact('omieService','breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OmieService::$rules);

        $omieService = OmieService::create($request->all());

        return redirect()->route('omie_services.index')
            ->with('success', 'OmieService created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $omieService = OmieService::find($id);
        $breadcrumbs = [
            ['name' => "Visualização de Serviço"]
        ];
        return view('omie-service.show', compact('omieService'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $omieService = OmieService::find($id);

        return view('omie-service.edit', compact('omieService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OmieService $omieService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OmieService $omieService)
    {
        request()->validate(OmieService::$rules);

        $omieService->update($request->all());

        return redirect()->route('omie_services.index')
            ->with('success', 'OmieService updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $omieService = OmieService::find($id)->delete();

        return redirect()->route('omie_services.index')
            ->with('success', 'OmieService deleted successfully');
    }
}
