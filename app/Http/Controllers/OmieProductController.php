<?php

namespace App\Http\Controllers;

use App\Models\OmieProduct;
use Illuminate\Http\Request;

/**
 * Class OmieProductController
 * @package App\Http\Controllers
 */
class OmieProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $omieProducts = OmieProduct::paginate();

        return view('omie-product.index', compact('omieProducts'))
            ->with('i', (request()->input('page', 1) - 1) * $omieProducts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $omieProduct = new OmieProduct();
        return view('omie-product.create', compact('omieProduct'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(OmieProduct::$rules);

        $omieProduct = OmieProduct::create($request->all());

        return redirect()->route('omie_products.index')
            ->with('success', 'OmieProduct created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $omieProduct = OmieProduct::find($id);

        return view('omie-product.show', compact('omieProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $omieProduct = OmieProduct::find($id);

        return view('omie-product.edit', compact('omieProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  OmieProduct $omieProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OmieProduct $omieProduct)
    {
        request()->validate(OmieProduct::$rules);

        $omieProduct->update($request->all());

        return redirect()->route('omie_products.index')
            ->with('success', 'OmieProduct updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $omieProduct = OmieProduct::find($id)->delete();

        return redirect()->route('omie_products.index')
            ->with('success', 'OmieProduct deleted successfully');
    }
}
