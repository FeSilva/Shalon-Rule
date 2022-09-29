<?php

namespace App\Http\Controllers;

use App\Models\SalesforceClient;
use Illuminate\Http\Request;

/**
 * Class SalesforceClientController
 * @package App\Http\Controllers
 */
class SalesforceClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesforceClients = SalesforceClient::paginate();

        return view('salesforce-client.index', compact('salesforceClients'))
            ->with('i', (request()->input('page', 1) - 1) * $salesforceClients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salesforceClient = new SalesforceClient();
        return view('salesforce-client.create', compact('salesforceClient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SalesforceClient::$rules);

        $salesforceClient = SalesforceClient::create($request->all());

        return redirect()->route('salesforce_accounts.index')
            ->with('success', 'SalesforceClient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salesforceClient = SalesforceClient::find($id);

        return view('salesforce-client.show', compact('salesforceClient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesforceClient = SalesforceClient::find($id);

        return view('salesforce-client.edit', compact('salesforceClient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SalesforceClient $salesforceClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesforceClient $salesforceClient)
    {
        request()->validate(SalesforceClient::$rules);

        $salesforceClient->update($request->all());

        return redirect()->route('salesforce_accounts.index')
            ->with('success', 'SalesforceClient updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $salesforceClient = SalesforceClient::find($id)->delete();

        return redirect()->route('salesforce_accounts.index')
            ->with('success', 'SalesforceClient deleted successfully');
    }
}
