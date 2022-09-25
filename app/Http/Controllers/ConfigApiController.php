<?php

namespace App\Http\Controllers;

use App\Models\ConfigApi;
use Illuminate\Http\Request;

/**
 * Class ConfigApiController
 * @package App\Http\Controllers
 */
class ConfigApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configApis = ConfigApi::paginate();

        return view('config-api.index', compact('configApis'))
            ->with('i', (request()->input('page', 1) - 1) * $configApis->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configApi = new ConfigApi();
        return view('config-api.create', compact('configApi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ConfigApi::$rules);

        $configApi = ConfigApi::create($request->all());

        return redirect()->route('config-apis.index')
            ->with('success', 'ConfigApi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configApi = ConfigApi::find($id);

        return view('config-api.show', compact('configApi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configApi = ConfigApi::find($id);

        return view('config-api.edit', compact('configApi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ConfigApi $configApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConfigApi $configApi)
    {
        request()->validate(ConfigApi::$rules);

        $configApi->update($request->all());

        return redirect()->route('config-apis.index')
            ->with('success', 'ConfigApi updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        //$configApi = ConfigApi::find($id)->delete();

        return redirect()->route('config-apis.index')
            ->with('success', 'ConfigApi deleted successfully');
    }
}
