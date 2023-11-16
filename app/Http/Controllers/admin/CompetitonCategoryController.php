<?php

namespace App\Http\Controllers\admin;

use App\festival;
use App\Http\Controllers\Controller;
use App\competiton_category;
use Illuminate\Http\Request;

class CompetitonCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $festival=festival::latest()->first();
        $competiton_categories=competiton_category::get();

        return view('admin.competition_category.competition_category')
                            ->with('competiton_categories',$competiton_categories)
                            ->with('festival',$festival);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $festival=festival::latest()->first();
        $competiton_categories=competiton_category::whereNull('child')
                            ->get();

        return view('admin.competition_category.competition_category_insert')
                    ->with('competiton_categories',$competiton_categories)
                    ->with('festival',$festival);

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
           "category_fa"    =>'required|string',
           'child'          =>'nullable|numeric',
           'festival_id'    =>'required|numeric',
            'status'        =>'required|boolean',
        ]);

        $competiton_categories=competiton_category::create($request->all());
        if($competiton_categories)
        {
            alert()->success('دسته بندی با موفقیت اضافه شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در اضافه کردن دسته بندی ')->persistent('بستن');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\competiton_category  $competiton_category
     * @return \Illuminate\Http\Response
     */
    public function show(competiton_category $competiton_category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\competiton_category  $competiton_category
     * @return \Illuminate\Http\Response
     */
    public function edit(competiton_category $competiton_category)
    {
        $festival=festival::latest()->first();
        $competiton_categories=competiton_category::whereNull('child')
                                ->get();

        return view('admin.competition_category.competition_category_edit')
            ->with('competiton_categories',$competiton_categories)
            ->with('competiton_category',$competiton_category)
            ->with('festival',$festival);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\competiton_category  $competiton_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, competiton_category $competiton_category)
    {
        $this->validate($request,[
            "category_fa"    =>'required|string',
            'child'          =>'nullable|numeric',
            'festival_id'    =>'required|numeric',
            'status'        =>'required|boolean',
        ]);

        $status=$competiton_category->update($request->all());

        if($status)
        {
            alert()->success('دسته بندی با موفقیت اضافه شد')->persistent('بستن');
        }
        else
        {
            alert()->error('خطا در اضافه کردن دسته بندی ')->persistent('بستن');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\competiton_category  $competiton_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(competiton_category $competiton_category)
    {
        //
    }
}
