@extends('user_fa.master.index')

@section('headerScript')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
            <div class="col-12 col-md-6  ">
                <div class="card">
                    <h5 class="card-header">ارسال اثر</h5>
                    <div class="card-body">
                        <form method="post" action="/panel/competiton" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title"> نام اثر:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label for="description">توضیحات<span class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image"> عکس اصلی<span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="image" name="image" value="{{old('image')}}">
                                <small class="text-muted">فرمت قابل قبول JPG و حداکثر 4 مگابایت</small>
                            </div>
                            <div class="form-group">
                                <label for="image2"> عکس دوم<span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="image2" name="image2">
                                <small class="text-muted">فرمت قابل قبول JPG و حداکثر 4 مگابایت</small>
                            </div>
                            <div class="form-group">
                                <label for="image3"> عکس سوم</label>
                                <input type="file" class="form-control-file" id="image3" name="image3">
                                <small class="text-muted">فرمت قابل قبول JPG و حداکثر 4 مگابایت</small>
                            </div>
                            <div class="form-group">
                                <label for="image4"> عکس چهارم</label>
                                <input type="file" class="form-control-file" id="image4" name="image4">
                                <small class="text-muted">فرمت قابل قبول JPG و حداکثر 4 مگابایت</small>
                            </div>
                            <div class="form-group">
                                <label for="image5"> عکس پنجم</label>
                                <input type="file" class="form-control-file" id="image5" name="image5">
                                <small class="text-muted">فرمت قابل قبول JPG و حداکثر 4 مگابایت</small>
                            </div>
                            <div class="form-group">
                                <label for="image6"> عکس ششم</label>
                                <input type="file" class="form-control-file" id="image6" name="image6">
                                <small class="text-muted">فرمت قابل قبول JPG و حداکثر 4 مگابایت</small>
                            </div>
                            <div class="form-group">
                                <label for="competiton_category_id">دسته بندی<span class="text-danger">*</span></label>
                                <select class="form-control" id="competiton_category_id" name="competiton_category_id">
                                    <option disabled selected>انتخاب کنید</option>
                                    @foreach($competiton_category as $item)
                                        <option value="{{$item->id}}" @if(old('competiton_category_id')==$item->id) selected @endif >{{$item->category_fa}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" id="div_competiton_category_id">
                                <label for="competiton_category_id">زیرمجموعه:<span class="text-danger">*</span></label>
                                <select class="form-control" id="competiton_category_id" name="competiton_category_id">
                                    <option disabled selected>انتخاب کنید</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="material_id">متریال اثر <span class="text-danger">*</span></label>
                                <select class="form-control" id="material_id" name="material_id">
                                    <option disabled selected>انتخاب کنید</option>
                                    @foreach($materials as $material)
                                        <option value="{{$material->id}}" @if(old('material_id')==$material->id) selected @endif >{{$material->material}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="submit" value="ارسال اثر" class="btn btn-success">
                        </form>
                    </div>
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
