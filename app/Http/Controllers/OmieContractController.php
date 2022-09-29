<?php

namespace App\Http\Controllers;

use App\Models\OmieContract;
use Illuminate\Http\Request;

/**
 * Class OmieContractController
 * @package App\Http\Controllers
 */
class OmieContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omieContracts = OmieContract::paginate();

        return view('omie-contract.index', compact('omieContracts'))
            ->with('i', (request()->input('page', 1) - 1) * $omieContracts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $omieContract = new OmieContract();
        return view('omie-contract.create', compact('omieContract'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OmieContract::$rules);

        $omieContract = OmieContract::create($request->all());

        return redirect()->route('omie_contracts.index')
            ->with('success', 'OmieContract created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $omieContract = OmieContract::find($id);

        return view('omie-contract.show', compact('omieContract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $omieContract = OmieContract::find($id);

        return view('omie-contract.edit', compact('omieContract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OmieContract $omieContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OmieContract $omieContract)
    {
        request()->validate(OmieContract::$rules);

        $omieContract->update($request->all());

        return redirect()->route('omie_contracts.index')
            ->with('success', 'OmieContract updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $omieContract = OmieContract::find($id)->delete();

        return redirect()->route('omie_contracts.index')
            ->with('success', 'OmieContract deleted successfully');
    }
}
