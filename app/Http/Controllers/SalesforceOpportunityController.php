<?php

namespace App\Http\Controllers;

use App\Models\SalesforceOpportunity;
use Illuminate\Http\Request;

/**
 * Class SalesforceOpportunityController
 * @package App\Http\Controllers
 */
class SalesforceOpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesforceOpportunities = SalesforceOpportunity::paginate();

        return view('salesforce-opportunity.index', compact('salesforceOpportunities'))
            ->with('i', (request()->input('page', 1) - 1) * $salesforceOpportunities->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salesforceOpportunity = new SalesforceOpportunity();
        return view('salesforce-opportunity.create', compact('salesforceOpportunity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SalesforceOpportunity::$rules);

        $salesforceOpportunity = SalesforceOpportunity::create($request->all());

        return redirect()->route('salesforce_services.index')
            ->with('success', 'SalesforceOpportunity created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salesforceOpportunity = SalesforceOpportunity::find($id);

        return view('salesforce-opportunity.show', compact('salesforceOpportunity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesforceOpportunity = SalesforceOpportunity::find($id);

        return view('salesforce-opportunity.edit', compact('salesforceOpportunity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SalesforceOpportunity $salesforceOpportunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesforceOpportunity $salesforceOpportunity)
    {
        request()->validate(SalesforceOpportunity::$rules);

        $salesforceOpportunity->update($request->all());

        return redirect()->route('salesforce_services.index')
            ->with('success', 'SalesforceOpportunity updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $salesforceOpportunity = SalesforceOpportunity::find($id)->delete();

        return redirect()->route('salesforce_services.index')
            ->with('success', 'SalesforceOpportunity deleted successfully');
    }
}
