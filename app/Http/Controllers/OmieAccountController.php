<?php

namespace App\Http\Controllers;

use App\Models\OmieAccount;
use Illuminate\Http\Request;

/**
 * Class OmieAccountController
 * @package App\Http\Controllers
 */
class OmieAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omieAccounts = OmieAccount::paginate();

        return view('omie-account.index', compact('omieAccounts'))
            ->with('i', (request()->input('page', 1) - 1) * $omieAccounts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $omieAccount = new OmieAccount();
        return view('omie-account.create', compact('omieAccount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OmieAccount::$rules);

        $omieAccount = OmieAccount::create($request->all());

        return redirect()->route('{omie_accounts}.index')
            ->with('success', 'OmieAccount created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $omieAccount = OmieAccount::find($id);

        return view('omie-account.show', compact('omieAccount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $omieAccount = OmieAccount::find($id);

        return view('omie-account.edit', compact('omieAccount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OmieAccount $omieAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OmieAccount $omieAccount)
    {
        request()->validate(OmieAccount::$rules);

        $omieAccount->update($request->all());

        return redirect()->route('{omie_accounts}.index')
            ->with('success', 'OmieAccount updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $omieAccount = OmieAccount::find($id)->delete();

        return redirect()->route('{omie_accounts}.index')
            ->with('success', 'OmieAccount deleted successfully');
    }
}
