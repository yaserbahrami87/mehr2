@extends('admin.master.index')

@section('content')
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">بروزرسانی دسته بندی</h5>
            <div class="card-body">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-farsi-tab" data-toggle="tab" data-target="#nav-farsi" type="button" role="tab" aria-controls="nav-farsi" aria-selected="true">بخش فارسی</button>
                </div>
                <form method="post" action="/admin/competiton_category/{{$competiton_category->id}}" >
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-farsi" role="tabpanel" aria-labelledby="nav-farsi-tab">
                            <div class="alert alert-warning mt-1 mb-5">
                                پر کردن فیلدهای ستاره دار اجباریست
                            </div>
                            <div class="col-12 col-md-6">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="category_fa">دسته بندی <span class="text-danger">*</span></span>
                                    </div>
                                    <input type="text" class="form-control"  id="category_fa" name="category_fa" value="{{old('category_fa',$competiton_category->category_fa)}}" />
                                </div>

                                <div class="form-group">
                                    <label for="festival_id">والد</label>

                                    <select class="form-control" id="child" name="child">
                                        <option disabled selected>انتخاب کنید</option>

                                        @foreach($competiton_categories as $category)
                                            <option value="{{$category->id}}" @if(old('child',$competiton_category->child)==$category->id) selected @endif >{{$category->category_fa}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="festival_id">جشنواره</label>
                                    <select class="form-control" id="festival_id" name="festival_id">
                                        <option disabled selected>انتخاب کنید</option>
                                        @foreach($festivals as $festival)
                                            <option value="{{$festival->id}}" @if(old('festival_id',$competiton_category->festival_id)==$festival->id) selected @endif >{{$festival->festival_fa}}</option>
                                        @endforeach
                                    </select>
                                </div>




                                <div class="form-group">
                                    <label for="status">وضعیت</label>
                                    <select class="form-control" id="status" name="status">
                                        <option disabled selected>انتخاب کنید</option>
                                        <option value="1" @if(old('status',$competiton_category->status)==1) selected @endif>فعال</option>
                                        <option value="0" @if(old('status',$competiton_category->status)==0) selected @endif>غیرفعال</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>
                    <button class="btn btn-success">بروزرسانی</button>
                </form>

            </div>
        </div>
    </div>
@endsection
