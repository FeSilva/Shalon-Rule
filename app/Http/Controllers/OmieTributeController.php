<?php

namespace App\Http\Controllers;

use App\Models\OmieTribute;
use Illuminate\Http\Request;

/**
 * Class OmieTributeController
 * @package App\Http\Controllers
 */
class OmieTributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omieTributes = OmieTribute::paginate();

        return view('omie-tribute.index', compact('omieTributes'))
            ->with('i', (request()->input('page', 1) - 1) * $omieTributes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $omieTribute = new OmieTribute();
        return view('omie-tribute.create', compact('omieTribute'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OmieTribute::$rules);

        $omieTribute = OmieTribute::create($request->all());

        return redirect()->route('omie_tributes.index')
            ->with('success', 'OmieTribute created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $omieTribute = OmieTribute::find($id);

        return view('omie-tribute.show', compact('omieTribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $omieTribute = OmieTribute::find($id);

        return view('omie-tribute.edit', compact('omieTribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OmieTribute $omieTribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OmieTribute $omieTribute)
    {
        request()->validate(OmieTribute::$rules);

        $omieTribute->update($request->all());

        return redirect()->route('omie_tributes.index')
            ->with('success', 'OmieTribute updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $omieTribute = OmieTribute::find($id)->delete();

        return redirect()->route('omie_tributes.index')
            ->with('success', 'OmieTribute deleted successfully');
    }
}
