@extends('admin.master.index')

@section('content')
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">افزودن متریال</h5>
            <div class="card-body">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-farsi-tab" data-toggle="tab" data-target="#nav-farsi" type="button" role="tab" aria-controls="nav-farsi" aria-selected="true">بخش فارسی</button>
                </div>
                <form method="post" action="/admin/material" >
                    {{csrf_field()}}
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-farsi" role="tabpanel" aria-labelledby="nav-farsi-tab">
                            <div class="alert alert-warning mt-1 mb-5">
                                پر کردن فیلدهای ستاره دار اجباریست
                            </div>
                            <div class="col-12 col-md-6">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="material">متریال <span class="text-danger">*</span></span>
                                    </div>
                                    <input type="text" class="form-control"  id="material" name="material" value="{{old('material')}}" />
                                </div>


                                <div class="form-group">
                                    <label for="status">وضعیت</label>
                                    <select class="form-control" id="status" name="status">
                                        <option disabled selected>انتخاب کنید</option>
                                        <option value="1">فعال</option>
                                        <option value="0">غیرفعال</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>
                    <button class="btn btn-success">افزودن</button>
                </form>

            </div>
        </div>
    </div>
@endsection
