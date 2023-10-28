@extends('admin.master.index')
@section('content')
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">تعریف خبر</h5>
            <div class="card-body">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-farsi-tab" data-toggle="tab" data-target="#nav-farsi" type="button" role="tab" aria-controls="nav-farsi" aria-selected="true">بخش فارسی</button>

                </div>
                <form method="post" action="/admin/news" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-farsi" role="tabpanel" aria-labelledby="nav-farsi-tab">
                            <div class="alert alert-warning mt-1 mb-5">
                                پر کردن فیلدهای ستاره دار اجباریست
                            </div>
                            <div class="col-12 col-md-6">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="image">عکس خبر<span class="text-danger">*</span></span>
                                    </div>
                                    <input type="file" class="form-control"  id="image" name="image" value="{{old('image')}}" />
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" > تیتر خبر:<span class="text-danger">*</span></span>
                                    </div>
                                    <input type="text" class="form-control"   id="title_fa" name="title_fa" value="{{old('title_fa')}}" />
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" > توضیحات کوتاه:<span class="text-danger">*</span></span>
                                    </div>
                                    <textarea class="form-control" id="description_fa" name="description_fa">{{old('description_fa')}}</textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="content_fa">متن خبر:<span class="text-danger">*</span></label>
                                    <textarea id="content_fa" name="content_fa">{{old('content_fa')}}</textarea>
                                </div>



                                <div class="form-group">
                                    <label for="festival_id">جشنواره</label>
                                    <select class="form-control" id="festival_id" name="festival_id">
                                        <option disabled selected>انتخاب کنید</option>
                                        @foreach($festivals as $festival)
                                            <option value="{{$festival->id}}" @if(old('festival_id')==$festival->id) selected @endif >{{$festival->festival_fa}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success">ایجاد خبر</button>
                </form>

            </div>
        </div>
    </div>
@endsection


@section('footerScript')

    <script src="/admin/ckeditor/ckeditor.js"></script>
    <script src="/admin/ckeditor/lang/fa.js"></script>
    <script>
        CKEDITOR.replace('content_fa');

        CKEDITOR.replace('content_en');
    </script>
@endsection
