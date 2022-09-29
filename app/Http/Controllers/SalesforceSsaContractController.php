<?php

namespace App\Http\Controllers;

use App\Models\SalesforceSsaContract;
use Illuminate\Http\Request;

/**
 * Class SalesforceSsaContractController
 * @package App\Http\Controllers
 */
class SalesforceSsaContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesforceSsaContracts = SalesforceSsaContract::paginate();

        return view('salesforce-ssa-contract.index', compact('salesforceSsaContracts'))
            ->with('i', (request()->input('page', 1) - 1) * $salesforceSsaContracts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salesforceSsaContract = new SalesforceSsaContract();
        return view('salesforce-ssa-contract.create', compact('salesforceSsaContract'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SalesforceSsaContract::$rules);

        $salesforceSsaContract = SalesforceSsaContract::create($request->all());

        return redirect()->route('salesforce_ssa_contracts.index')
            ->with('success', 'SalesforceSsaContract created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salesforceSsaContract = SalesforceSsaContract::find($id);

        return view('salesforce-ssa-contract.show', compact('salesforceSsaContract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesforceSsaContract = SalesforceSsaContract::find($id);

        return view('salesforce-ssa-contract.edit', compact('salesforceSsaContract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SalesforceSsaContract $salesforceSsaContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesforceSsaContract $salesforceSsaContract)
    {
        request()->validate(SalesforceSsaContract::$rules);

        $salesforceSsaContract->update($request->all());

        return redirect()->route('salesforce_ssa_contracts.index')
            ->with('success', 'SalesforceSsaContract updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $salesforceSsaContract = SalesforceSsaContract::find($id)->delete();

        return redirect()->route('salesforce_ssa_contracts.index')
            ->with('success', 'SalesforceSsaContract deleted successfully');
    }
}
