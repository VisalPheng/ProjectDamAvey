<?php

namespace App\Http\Controllers;

use App\Models\ProductsByRegion;
use Illuminate\Http\Request;
use App\Models\products;
use Auth;

class ProductsByRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = ProductsByRegion::all();
        return view('backend.productsbyregion.productbyregionindex')->with(["region"=>$region]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.productsbyregion.productbyregioncreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id']=Auth::id();
        $pro_arr = $request->toArray();
        ProductsByRegion::create($pro_arr);

        return redirect()->route('productsbyregion.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productbyregion  $productbyregion
     * @return \Illuminate\Http\Response
     */
    public function detail($id, products $allproducts)
    {
        $region = ProductsByRegion::find($id);



        $allproducts = products::all();
        return view('backend.productsbyregion.productbyregiondetail', ['region' => $region], ["allproducts"=>$allproducts] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productbyregion  $productbyregion
     * @return \Illuminate\Http\Response
     */
    public function edit(productbyregion $productbyregion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productbyregion  $productbyregion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productbyregion $productbyregion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productbyregion  $productbyregion
     * @return \Illuminate\Http\Response
     */
    public function destroy(productbyregion $productbyregion)
    {
        //
    }
}
