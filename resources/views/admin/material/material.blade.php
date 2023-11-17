@extends('admin.master.index')

@section('headerScript')
    <link href="/admin/plugins/datatables/datatables.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="col-12 mb-3">
        <a href="/admin/material/create" class="btn btn-primary">اضافه کردن متریال</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered table-striped text-center" id="table_example">
            <thead>
            <tr>
                <th>#</th>
                <th>متریال</th>
                <th>وضعیت</th>
                <th>ویرایش</th>

            </tr>
            </thead>


            <tbody>
            @foreach($materials as $material)
                <tr>
                    <td>{{$loop->iteration}}</td>

                    <td>{{$material->material}}</td>
                    <td>{{($material->status())}}</td>
                    <td>
                        <a href="/admin/material/{{$material->id}}/edit" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>

                </tr>
            @endforeach

            </tbody>

        </table>
    </div>
@endsection

@section('footerScript')
    <script src="/admin/plugins/datatables/datatables.min.js"></script>

    <script>
        $(function () {

            $('#table_example').DataTable({
                "language": {
                    "paginate": {
                        "next": "بعدی",
                        "previous" : "قبلی"
                    }
                },
                "info" : false,
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "autoWidth": false
            });
        });
    </script>
@endsection
