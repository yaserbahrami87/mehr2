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
        <div class="col-12 col-md-4  mx-auto mb-b ">
            <div class="card col-12 mb-3 upload_pictures bg-transparent" >
                <h3 class="text-muted text-center pb-3">ویرایش اثر</h3>
                <form method="post" action="/panel/competiton/{{$competiton->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="card">
                        <div  class="card-header text-center">عکس اول</div>
                        <div class="card-body">
                            <img src="/images/competition/{{$competiton->image}}" class="img-fluid mb-3 img-thumbnail" />
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image">تغییر عکس اول</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image"  >
                                    <label class="custom-file-label" for="image">انتخاب عکس</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center">عکس دوم</div>
                        <div class="card-body">
                            <img src="/images/competition/{{$competiton->image2}}" class="img-fluid mb-3" />
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image2">تغییر عکس دوم</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image2" name="image2" >
                                    <label class="custom-file-label" for="image2">انتخاب عکس</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        @if(!is_null($competiton->image3))
                            <div class="card-header text-center">عکس سوم</div>
                            <img src="/images/competition/{{$competiton->image3}}" class="img-fluid mb-3" />
                        @endif
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="image3">تغییر عکس سوم</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image3" name="image3" >
                                <label class="custom-file-label" for="image3">انتخاب عکس</label>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        @if(!is_null($competiton->image4))
                            <div class="card-header text-center">عکس چهارم</div>
                            <img src="/images/competition/{{$competiton->image4}}" class="img-fluid mb-3" />
                        @endif
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image4">تغییر عکس چهارم</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image4" name="image4" >
                                    <label class="custom-file-label" for="image4">انتخاب عکس</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        @if(!is_null($competiton->image5))
                            <div class="card-header  text-center">عکس پنجم</div>
                            <img src="/images/competition/{{$competiton->image5}}" class="img-fluid mb-3" />
                        @endif
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image5">تغییر عکس پنجم</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image5" name="image5" >
                                    <label class="custom-file-label" for="image5">انتخاب عکس</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        @if(!is_null($competiton->image6))
                            <div class="card-header text-center">عکس ششم</div>
                            <img src="/images/competition/{{$competiton->image6}}" class="img-fluid mb-3" />
                        @endif
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="image3">تغییر عکس ششم</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image6" name="image6" >
                                    <label class="custom-file-label" for="image6">انتخاب عکس</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="title"> نام اثر:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title',$competiton->title)}}">
                    </div>
                    <div class="form-group">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{old('description',$competiton->description)}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="competiton_category_id">دسته بندی<span class="text-danger">*</span></label>
                        <select class="form-control" id="competiton_category_id" name="competiton_category_id">
                            <option disabled selected>انتخاب کنید</option>
                            @foreach($competiton_category as $item)
                                <option value="{{$item->id}}" @if(old('competiton_category_id',$competiton->competiton_category_id)==$item->id) selected @endif >{{$item->category_fa}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="div_competiton_category_id">
                        <label for="competiton_category_child">زیرمجموعه:<span class="text-danger">*</span></label>

                        <select class="form-control" id="competiton_category_child" name="competiton_category_child">
                            <option disabled selected>انتخاب کنید</option>
                            @foreach($competiton_category_child as $item)
                                <option @if($item->id==$competiton->competiton_category_child) selected @endif value="{{$item->id}}" >{{$item->category_fa}}</option>

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

@section('footerScript')
    <script>
        $("#competiton_category_id").change(function()
        {
            let competiton_category_id=document.querySelector('#competiton_category_id').value;
            users="<label for=\"competiton_category_child\">زیرمجموعه را انتخاب کنید <span class=\"text-danger text-bold\">*</span></label>" +
                "<select class=\"form-control\" id=\"competiton_category_child\" name='competiton_category_child'>" +
                "<option selected disabled>انتخاب کنید</option></select>";

            $('#div_competiton_category_id').html(users);
            $.ajax(
                {
                    type:'get',
                    url:'/panel/competition_category/'+competiton_category_id,
                    success:function(data)
                    {
                        if(data.length==0)
                        {
                            errorsHtml='<div class="alert alert-danger text-left"><ul><li>موردی یافت نشد</li></ul></div>';
                            $('#show_errors').html( errorsHtml );
                        }
                        else
                        {

                            for (i=0;i<data.length;i++)
                            {
                                users="<label for=\"competiton_category_child\">زیرمجموعه را انتخاب کنید <span class=\"text-danger text-bold\">*</span></label>" +
                                    "<select class=\"form-control\" id=\"competiton_category_child\" name='competiton_category_child'>" +
                                    "<option selected disabled>انتخاب کنید</option>";
                                $.each( data, function( key, value ) {

                                    users += ''+
                                        '<option value="'+value.id+'">'+
                                        value.category_fa+
                                        '</option>';
                                });
                                users=users+"</select>"
                            }
                            $('#div_competiton_category_id').html(users);

                        }


                    },
                    error : function(data)
                    {
                        $('#result_reserve').text(data.responseJSON.errors);
                        console.log(data.responseJSON.errors);
                        errorsHtml='<div class="alert alert-danger text-left"><ul>';
                        $.each( data.responseJSON.errors, function( key, value ) {
                            errorsHtml += '<li>'+ value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';

                        $( '#result_reserve' ).html( errorsHtml );
                    }

                }
            );
        });
    </script>
@endsection
