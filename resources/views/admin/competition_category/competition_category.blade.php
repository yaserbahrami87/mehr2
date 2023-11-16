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

                        </tr>
                            @foreach($competiton_categories as $competiton_category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$competiton_category->category_fa}}</td>

                                    <td>{{$competiton_category->festival->festival_fa}}</td>
                                    <td>
                                        <a href="/admin/competiton_category/{{$competiton_category->id}}/edit" class="btn btn-warning">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                        <tr></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
