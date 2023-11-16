@extends('user_fa.master.index')

@section('headerScript')
    <style>
        .files input {
            outline: 2px dashed #92b0b3;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            padding: 120px 0px 85px 35%;
            text-align: center !important;
            margin: 0;
            width: 100% !important;
        }
        .files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
        }
        .files{ position:relative}
        .files:after {  pointer-events: none;
            position: absolute;
            top: 60px;
            left: 0;
            width: 50px;
            right: 0;
            height: 56px;
            content: "";
            background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
            display: block;
            margin: 0 auto;
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .color input{ background-color:#f1f1f1;}
        .files:before {
            position: absolute;
            bottom: 10px;
            left: 0;  pointer-events: none;
            width: 100%;
            right: 0;
            height: 57px;
            content: " or drag it here. ";
            display: block;
            margin: 0 auto;
            color: #2ea591;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-12 col-md-3  mx-auto mb-b ">
            <div class="card col-12 mb-3 upload_pictures bg-transparent" >
                <h3 class="text-muted text-center pb-3">ویرایش اثر</h3>
                <form method="post" action="/panel/competiton/{{$competiton->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <img src="/images/competition/{{$competiton->image}}" class="img-fluid mb-3" />
                    <div class="form-group">
                        <label for="title"> نام اثر:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title',$competiton->title)}}">
                    </div>
                    <div class="form-group">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{old('description',$competiton->description)}}</textarea>
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="image"> عکس اصلی<span class="text-danger">*</span></label>
                        <input type="file" class="form-control-file" id="image" name="image" value="{{old('image')}}">
                    </div>
                    <div class="form-group">
                        <label for="image2"> عکس دوم<span class="text-danger">*</span></label>
                        <input type="file" class="form-control-file" id="image2" name="image2">
                    </div>
                    <div class="form-group">
                        <label for="image3"> عکس سوم</label>
                        <input type="file" class="form-control-file" id="image3" name="image3">
                    </div>
                    <div class="form-group">
                        <label for="image4"> عکس چهارم</label>
                        <input type="file" class="form-control-file" id="image4" name="image4">
                    </div>
                    <div class="form-group">
                        <label for="image5"> عکس پنجم</label>
                        <input type="file" class="form-control-file" id="image5" name="image5">
                    </div>
                    <div class="form-group">
                        <label for="image6"> عکس ششم</label>
                        <input type="file" class="form-control-file" id="image6" name="image6">
                    </div>
                    -->
                    <div class="form-group">
                        <label for="competiton_category_id">دسته بندی<span class="text-danger">*</span></label>
                        <select class="form-control" id="competiton_category_id" name="competiton_category_id">
                            <option disabled selected>انتخاب کنید</option>
                            @foreach($competiton_category as $item)
                                <option value="{{$item->id}}" @if(old('competiton_category_id',$competiton->competiton_category_id)==$item->id) selected @endif >{{$item->category_fa}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="material_id">متریال اثر <span class="text-danger">*</span></label>
                        <select class="form-control" id="material_id" name="material_id">
                            <option disabled selected>انتخاب کنید</option>
                            @foreach($materials as $material)
                                <option value="{{$material->id}}" @if(old('material_id',$competiton->material_id)==$material->id) selected @endif >{{$material->material}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="submit" value="بروزرسانی اثر" class="btn btn-success">
                </form>



                {{--
                <form class="form" method="post" action="/panel/competiton/{{$competiton->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="row text-center">
                        <div class="card col-12  mb-3 bg-transparent">

                            <img src="/images/competition/{{$competiton->image}}" class="img-fluid mb-3" />
                            <input type="hidden" name="competiton_category_id" value="1" />
                            <div class="form-group">
                                <label >توضیحات:
                                </label>
                                <textarea class="form-control" name="description" rows="3">{{$competiton->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>نام مکان:
                                    <span class="alert text-danger m-0 p-0">*</span>
                                </label>
                                <input type="text" class="form-control"  name="name_place" value="{{$competiton->name_place}}">
                            </div>
                            <div class="form-group">
                                <label>آدرس مکان:
                                </label>
                                <input type="text" class="form-control"  name="location" value="{{$competiton->location}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">
                                بروزرسانی
                            </button>
                        </div>
                    </div>
                </form>
                --}}
            </div>

        </div>
    </div>
    </div>
@endsection
