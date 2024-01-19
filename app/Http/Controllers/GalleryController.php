<?php

namespace App\Http\Controllers;

use App\festival;
use App\gallery;
use App\gallery_category;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(festival $festival,Request $request)
    {

        if($request->has('category'))
        {
            $status=gallery_category::where('category_fa',$request->category)
                                ->first();
            if($status)
            {
                $galleries=gallery::where('festival_id','=',$festival->id)
                                ->where('gallery_category_id',$status->id)
                                ->orderby('id','desc')
                                ->paginate(20);
                $galleries->appends(['category' => $request['category']]);

            }
            else
            {
                $galleries=gallery::where('festival_id','=',$festival->id)
                                ->orderby('id','desc')
                                ->paginate(20);

                alert()->error('این دسته بندی در گالری وجود ندارد')->persistent('بستن');
            }

        }
        else
        {
            $galleries=gallery::where('festival_id','=',$festival->id)
                ->orderby('id','desc')
                ->paginate(20);
        }




        $category_categories=gallery_category::where('status',1)
                                                ->get();

        return view('farsi.gallery')
                        ->with('galleries',$galleries)
                        ->with('category_categories',$category_categories)
                        ->with('festival',$festival);
    }

    public function show_en(festival $festival)
    {
        $galleries=gallery::where('festival_id','=',$festival->id)
            ->paginate(12);

        return view('english.gallery')
            ->with('galleries',$galleries)
            ->with('festival',$festival);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
