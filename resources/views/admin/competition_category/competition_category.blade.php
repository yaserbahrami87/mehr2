@extends('admin.master.index')
@section('content')
    <div class="col-12">
        <div class="card">
            <h5 class="card-header">تعریف دسته بندی جشنواره</h5>
            <div class="card-body">
                <a href="/admin/competiton_category/create" class="btn btn-primary mb-3">افزودن</a>
                <div class="col-12 table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>#</th>
                            <th>دسته بندی</th>
                            <th>جشنواره</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                            @foreach($competiton_categories as $competiton_category)
                                 <td>{{$loop->iteration}}</td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                                 <td></td>
                            @endforeach

                        <tr></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
