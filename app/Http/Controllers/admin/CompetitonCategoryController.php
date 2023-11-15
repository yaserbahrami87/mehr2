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
        return view('admin.competition_category.competition_category_insert')
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\competiton_category  $competiton_category
     * @return \Illuminate\Http\Response
     */
    public function show(competiton_category $competiton_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\competiton_category  $competiton_category
     * @return \Illuminate\Http\Response
     */
    public function edit(competiton_category $competiton_category)
    {
        //
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
        //
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
