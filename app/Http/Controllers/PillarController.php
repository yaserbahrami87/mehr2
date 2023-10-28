<?php

namespace App\Http\Controllers;

use App\festival;
use App\pillar;
use Illuminate\Http\Request;

class PillarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function show(festival $festival)
    {

        return view('farsi.pillars_single')
                        ->with('festival',$festival);
    }

    public  function show_en(festival $festival)
    {
        return view('english.pillars_single')
                        ->with('festival',$festival);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function edit(pillar $pillar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pillar $pillar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pillar  $pillar
     * @return \Illuminate\Http\Response
     */
    public function destroy(pillar $pillar)
    {
        //
    }
}
