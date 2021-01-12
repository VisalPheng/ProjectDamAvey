<?php

namespace App\Http\Controllers;

use App\Models\equipmentproduct;
use App\Models\equipment;
use App\Models\products;

use Illuminate\Http\Request;

class EquipmentProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allequipmentproduct = equipmentproduct::all();
        return view('backend.equipmentproduct.equipmentproductindex')->with(["allequipmentproduct"=>$allequipmentproduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(products $allproducts, equipment $allequipment)
    {
        $allproducts = products::all();
        $allequipments = equipment::all();
        return view('backend.equipmentproduct.equipmentproductcreate', ['allproducts' => $allproducts], ['allequipments' => $allequipments] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'equipment_id' => 'required',
        ]);

        $pro_arr = $request->toArray();
        equipmentproduct::create($pro_arr);

        return redirect()->route('equipmentproduct.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\equipmentproduct  $equipmentproduct
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\equipmentproduct  $equipmentproduct
     * @return \Illuminate\Http\Response
     */
    // public function edit( $id,products $allproducts,equipment $allequipment)
    // {
    //     $equipmentproduct = equipmentproduct::find($id);
    //     $allequipments = equipment::all();
    //     $allproducts = products::all();
    //     return view('backend.equipmentproduct.equipmentproductedit',['equipmentproduct' => $equipmentproduct],["allproducts"=>$allproducts],['allequipments'=>$allequipments]);
    // }
    public function edit($id, equipment $allequipment)
    {
        $equipmentproduct = equipmentproduct::find($id);
        $allequipment = equipment::all();
        return view('backend.equipmentproduct.equipmentproductedit',['equipmentproduct' => $equipmentproduct], ['allequipment' => $allequipment] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\equipmentproduct  $equipmentproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id , equipmentproduct $equipmentproduct)
    {
        $equipmentproduct = equipmentproduct::find($id);

        $equipmentproduct->equipment_id = $request->input('equipment_id');
        $equipmentproduct->save();

        return redirect()->route('equipmentproduct.index')->with('updated', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\equipmentproduct  $equipmentproduct
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $equipmentproduct = equipmentproduct::find($id);
        $equipmentproduct->delete();

        return redirect()->route('equipmentproduct.index')->with('deleted', 'Product deleted successfully.');
    }
}
