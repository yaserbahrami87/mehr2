<?php

namespace App\Http\Controllers;

use App\competiton;
use App\competiton_category;
use App\festival;
use App\material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CompetitonController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $festival=festival::latest()->first();

        return view('user_fa.competition.competition_all')
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
        $competiton_category=competiton_category::where('status','=',1)
                                                ->wherenull('child')
                                                ->get();

        $materials=material::where('status','=',1)
                                ->get();

        return view('user_fa.competition.competion')
            ->with('competiton_category',$competiton_category)
            ->with('materials',$materials)
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

        $this->validate($request,
        [
           'title'                    =>'required|string|max:200|',
           'description'              =>'nullable|string|min:5',
           'competiton_category_id'   =>'required|numeric',
           'competiton_category_child'=>'required|numeric',
           'material_id'              =>'required|numeric',
            'image'                   =>'required|mimes:jpg,jpeg|max:4096',
            'image2'                   =>'required|mimes:jpg,jpeg|max:4096',
            'image3'                   =>'nullable|mimes:jpg,jpeg|max:4096',
            'image4'                   =>'nullable|mimes:jpg,jpeg|max:4096',
            'image5'                   =>'nullable|mimes:jpg,jpeg|max:4096',
            'image6'                   =>'nullable|mimes:jpg,jpeg|max:4096',
        ]);

        $festival=festival::latest()->first();
        $competition= competiton::create([
            'description'            =>$request['description'],
            'title'                  =>$request['title'],
            'material_id'            =>$request['material_id'],
            'date_fa'                =>$this->dateNow,
            'time_fa'                =>$this->timeNow,
            'competiton_category_id' =>$request['competiton_category_id'],
            'competiton_category_child' =>$request['competiton_category_child'],
            'user_id'                =>Auth::user()->id,
            'festival_id'            =>$festival->id,
        ]);
       if($request->has('image'))
       {
           $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().'.'.$request->file('image')->extension();
           $image_thumbnail='thumbnail_'.$image;
           $path=public_path('/images/competition/');
           $files=$request->file('image')->move($path, $image);
           $request->image=$image;
           $img=Image::make($files->getRealPath())
               ->resize(200,null,function ($constraint) {
                   $constraint->aspectRatio();
               })
               ->save($path.$image_thumbnail);
           $competition->image=$image;
           $competition->save();
       }

        if($request->has('image2'))
        {
            $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image2')->extension();
            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image2')->move($path, $image);
            $request->image=$image;
            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);
            $competition->image2=$image;
            $competition->save();
        }

        if($request->has('image3'))
        {
            $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image3')->extension();
            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image3')->move($path, $image);
            $request->image=$image;
            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);
            $competition->image3=$image;
            $competition->save();
        }

        if($request->has('image4'))
        {
            $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image4')->extension();
            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image4')->move($path, $image);
            $request->image=$image;
            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);
            $competition->image4=$image;
            $competition->save();
        }

        if($request->has('image5'))
        {
            $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image5')->extension();
            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image5')->move($path, $image);
            $request->image=$image;
            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);
            $competition->image5=$image;
            $competition->save();
        }

        if($request->has('image6'))
        {
            $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image6')->extension();
            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image6')->move($path, $image);
            $request->image=$image;
            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);
            $competition->image6=$image;
            $competition->save();
        }


           alert()->success('اثر  با موفقیت در جشنواره ثبت شد')->persistent('بستن');


       return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\competiton  $competiton
     * @return \Illuminate\Http\Response
     */
    public function show(competiton $competiton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\competiton  $competiton
     * @return \Illuminate\Http\Response
     */
    public function edit(competiton $competiton)
    {
        $festival=festival::latest()->first();
        $competiton_category=competiton_category::where('status','=',1)
            ->wherenull('child')
            ->get();

        $competiton_category_child=competiton_category::where('child',$competiton->competiton_category_id)
                                                        ->where('status',1)
                                                        ->get();

        $materials=material::where('status','=',1)
            ->get();

        if(Auth::user()->id==$competiton->user_id)
        {
            return view('user_fa.competition.competition_edit')
                            ->with('festival',$festival)
                            ->with('competiton_category',$competiton_category)
                            ->with('materials',$materials)
                            ->with('competiton_category_child',$competiton_category_child)
                            ->with('competiton',$competiton);
        }
        else
        {
            return abort(403);
        }
    }

    public function edit_en(competiton $competiton)
    {
        if(Auth::user()->id==$competiton->user_id)
        {
            return view('user_en.competition.competition_edit')
                ->with('competiton',$competiton);
        }
        else
        {
            return abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\competiton  $competiton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, competiton $competiton)
    {
        $festival=festival::latest()->first();

        $this->validate($request,
            [
                'title'                    =>'required|string|max:200|',
                'description'              =>'required|string|max:200|min:5',
                'competiton_category_id'   =>'required|numeric',
                'competiton_category_child'   =>'required|numeric',
                'material_id'              =>'required|numeric',
                'image'                    =>'nullable|mimes:jpg,jpeg|max:4096',
                'image2'                   =>'nullable|mimes:jpg,jpeg|max:4096',
                'image3'                   =>'nullable|mimes:jpg,jpeg|max:4096',
                'image4'                   =>'nullable|mimes:jpg,jpeg|max:4096',
                'image5'                   =>'nullable|mimes:jpg,jpeg|max:4096',
                'image6'                   =>'nullable|mimes:jpg,jpeg|max:4096',
            ]);

        $status=$competiton->update([
            'title'                     =>$request->title,
            'description'               =>$request->description,
            'competiton_category_id'    =>$request->competiton_category_id,
            'competiton_category_child' =>$request->competiton_category_child,
            'material_id'               =>$request->material_id,
        ]);

        if($request->has('image'))
        {
            $image=pathinfo(public_path('/images/competition/'.$competiton->image))['filename'].'.'.$request->file('image')->extension();
            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image')->move($path, $image);
            $request->image=$image;
            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);
            $request->image=$image;
            $competiton->image=$image;
            $competiton->save();
        }

        if($request->has('image2'))
        {

            $image=pathinfo(public_path('/images/competition/'.$competiton->image2))['filename'].'.'.$request->file('image2')->extension();

            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image2')->move($path, $image);

            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);

            $competiton->image2=$image;
            $competiton->save();

        }

        if($request->has('image3'))
        {
            if(is_null($competiton->image3))
            {
                $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image3')->extension();
            }
            else
            {
                $image=pathinfo(public_path('/images/competition/'.$competiton->image3))['filename'].'.'.$request->file('image3')->extension();
            }


            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image3')->move($path, $image);

            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);

            $competiton->image3=$image;
            $competiton->save();

        }

        if($request->has('image4'))
        {
            if(is_null($competiton->image4))
            {
                $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image4')->extension();
            }
            else
            {
                $image=pathinfo(public_path('/images/competition/'.$competiton->image4))['filename'].'.'.$request->file('image4')->extension();
            }


            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image4')->move($path, $image);

            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);

            $competiton->image4=$image;
            $competiton->save();
        }

        if($request->has('image5'))
        {
            if(is_null($competiton->image5))
            {
                $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image5')->extension();
            }
            else
            {
                $image=pathinfo(public_path('/images/competition/'.$competiton->image5))['filename'].'.'.$request->file('image5')->extension();
            }


            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image5')->move($path, $image);

            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);

            $competiton->image5=$image;
            $competiton->save();
        }
        if($request->has('image6'))
        {
            if(is_null($competiton->image6))
            {
                $image=Auth::user()->id.'_'.$request->competiton_category_id.'_'.$festival->id.'_'.time().rand().'.'.$request->file('image6')->extension();
            }
            else
            {
                $image=pathinfo(public_path('/images/competition/'.$competiton->image6))['filename'].'.'.$request->file('image6')->extension();
            }


            $image_thumbnail='thumbnail_'.$image;
            $path=public_path('/images/competition/');
            $files=$request->file('image6')->move($path, $image);

            $img=Image::make($files->getRealPath())
                ->resize(200,null,function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($path.$image_thumbnail);

            $competiton->image6=$image;
            $competiton->save();
        }




        if($status)
        {
            alert()->success('عکس بروزرسانی شد')->persistent('بستن');
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
     * @param  \App\competiton  $competiton
     * @return \Illuminate\Http\Response
     */
    public function destroy(competiton $competiton,Request $request)
    {
        $competiton=competiton::where('id','=',$request->competition_id)
                            ->first();
        if($competiton)
        {
            if($competiton->user_id==Auth::user()->id)
            {
                $status=$competiton->delete();
                if($status)
                {
                    alert()->success('عکس با موفقیت حذف شد');
                }
                else
                {
                    alert()->error('خطا در حذف');
                }
            }
            else
            {
                abort(403);
            }
        }
        else
        {
            return abort(403);
        }

        return back();

    }
}
