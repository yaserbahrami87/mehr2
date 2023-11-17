<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials=material::get();
        return view('admin.material.material')
                        ->with('materials',$materials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.material.material_insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'material'  =>'required|string',
            'status'    =>'required|boolean',
        ]);

        $material=material::create($request->all());

        if($material)
        {
            alert()->success('متریال با موفقیت اضافه شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در ثبت متریال')->persistent('بستن');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(material $material)
    {
        return view('admin.material.material_edit')
                        ->with('material',$material);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, material $material)
    {
        $this->validate($request,[
            'material'  =>'required|string',
            'status'    =>'required|boolean',
        ]);

        $status=$material->update($request->all());
        if($status)
        {
            alert()->success('متریال با موفقیت به روزرسانی شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در بروزرسانی')->persistent('بستن');
        }

        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(material $material)
    {
        //
    }
}
