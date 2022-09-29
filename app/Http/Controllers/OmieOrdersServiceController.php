<?php

namespace App\Http\Controllers;

use App\Models\OmieOrdersService;
use Illuminate\Http\Request;

/**
 * Class OmieOrdersServiceController
 * @package App\Http\Controllers
 */
class OmieOrdersServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omieOrdersServices = OmieOrdersService::paginate();

        return view('omie-orders-service.index', compact('omieOrdersServices'))
            ->with('i', (request()->input('page', 1) - 1) * $omieOrdersServices->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $omieOrdersService = new OmieOrdersService();
        return view('omie-orders-service.create', compact('omieOrdersService'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OmieOrdersService::$rules);

        $omieOrdersService = OmieOrdersService::create($request->all());

        return redirect()->route('omie_orders_services.index')
            ->with('success', 'OmieOrdersService created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $omieOrdersService = OmieOrdersService::find($id);

        return view('omie-orders-service.show', compact('omieOrdersService'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $omieOrdersService = OmieOrdersService::find($id);

        return view('omie-orders-service.edit', compact('omieOrdersService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OmieOrdersService $omieOrdersService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OmieOrdersService $omieOrdersService)
    {
        request()->validate(OmieOrdersService::$rules);

        $omieOrdersService->update($request->all());

        return redirect()->route('omie_orders_services.index')
            ->with('success', 'OmieOrdersService updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $omieOrdersService = OmieOrdersService::find($id)->delete();

        return redirect()->route('omie_orders_services.index')
            ->with('success', 'OmieOrdersService deleted successfully');
    }
}
