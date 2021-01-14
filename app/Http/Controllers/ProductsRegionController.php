<?php

namespace App\Http\Controllers;

use App\Models\ProductsRegion;
use Illuminate\Http\Request;
use App\Models\products;
use Auth;

class ProductsRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproductsregion = ProductsRegion::paginate(5);
        return view('backend.productsregion.productsregionindex')->with(["allproductsregion"=>$allproductsregion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.productsregion.productsregioncreate');
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
        ProductsRegion::create($pro_arr);

        return redirect()->route('productsregion.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductsRegion  $productsRegion
     * @return \Illuminate\Http\Response
     */
    public function detail($id, products $allproducts)
    {
        $productsRegion = ProductsRegion::find($id);

        $allproducts = products::all();
        return view('backend.productsregion.productsregiondetail', ['productsRegion' => $productsRegion], ["allproducts"=>$allproducts] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductsRegion  $productsRegion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productsregion = ProductsRegion::find($id);
        return view('backend.productsregion.productsregionedit')->with('productsregion',$productsregion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductsRegion  $productsRegion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, ProductsRegion $productsRegion)
    {
        $productsregion = ProductsRegion::find($id);

        $productsregion->name = $request->input('name');
        $productsregion->description = $request->input('description');
        $productsregion->save();

        return redirect()->route('productsregion.index')->with('updated', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductsRegion  $productsRegion
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $productsregion = ProductsRegion::find($id);
        $productsregion->delete();

        return redirect()->route('productsregion.index')->with('deleted', 'Product deleted successfully.');
    }
}
