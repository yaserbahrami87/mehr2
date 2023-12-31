@extends('admin.master.index')
@section('content')
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">افزودن عکس</h5>
            <div class="card-body">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-farsi-tab" data-toggle="tab" data-target="#nav-farsi" type="button" role="tab" aria-controls="nav-farsi" aria-selected="true">بخش فارسی</button>
                </div>
                <form method="post" action="/admin/gallery" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-farsi" role="tabpanel" aria-labelledby="nav-farsi-tab">
                            <div class="alert alert-warning mt-1 mb-5">
                                پر کردن فیلدهای ستاره دار اجباریست
                            </div>
                            <div class="col-12 col-md-6">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="image">عکس <span class="text-danger">*</span></span>
                                    </div>
                                    <input type="file" class="form-control"  id="image" name="image" value="{{old('image')}}" />
                                </div>


                                <div class="form-group">
                                    <label for="festival_id">دسته عکس</label>
                                    <select class="form-control" id="gallery_category_id" name="gallery_category_id">
                                        <option disabled selected>انتخاب کنید</option>
                                        @foreach($gallery_categories as $gallery_category)
                                            <option value="{{$gallery_category->id}}" @if(old('gallery_category_id')==$gallery_category->id) selected @endif >{{$gallery_category->category_fa}}</option>
                                        @endforeach
                                    </select>
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
                    <button class="btn btn-success">افزودن عکس</button>
                </form>

            </div>
        </div>
    </div>
@endsection


@section('footerScript')

    <script src="/admin/ckeditor/ckeditor.js"></script>
    <script src="/admin/ckeditor/lang/fa.js"></script>
    <script>
        CKEDITOR.replace('description_fa',
            {
                language:'fa',
            });

        CKEDITOR.replace('description_en');
    </script>
@endsection
