<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use Illuminate\Http\Request;
use Auth;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allequipment = equipment::all();
        return view('backend.equipment.equipmentindex')->with(["allequipment"=>$allequipment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.equipment.equipmentcreate');
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
            'name' => 'required',
            'description' => 'required',
        ]);

        $img = $request->file('img_url');
        $img_name = time().'.'.$img->extension();
        $request->file('img_url')->move(public_path('images'),$img_name);
        $request['user_id']=Auth::id();
        $pro_arr = $request->toArray();
        $pro_arr['img_url'] = $img_name;
        equipment::create($pro_arr);

        return redirect()->route('equipment.create')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $equipment = equipment::find($id);
        return view('backend.equipment.equipmentdetail', ['equipment' =>$equipment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = equipment::find($id);
        return view('backend.equipment.equipmentedit')->with('equipment',$equipment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id, equipment $equipment)
    {
        $equipment = equipment::find($id);

        $equipment->name = $request->input('name');
        $equipment->description = $request->input('description');

        if($request->hasfile('img_url')) {
            $img = $request->file('img_url');
            $extension = $img->getClientOriginalExtension();
            $img_name = time().'.'.$img->extension();
            $img->move(public_path('images'),$img_name);
            $equipment->img_url = $img;
            $equipment_arr = $request->toArray();
            $equipment_arr['img_url'] = $img_name;
            $equipment->update($equipment_arr);
        }
        $equipment->save();

        return redirect()->route('equipment.index')->with('updated', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $equipment = equipment::find($id);

        $equipment->delete();

        return redirect()->route('equipment.index')->with('deleted', 'Product deleted successfully.');
    }
}
