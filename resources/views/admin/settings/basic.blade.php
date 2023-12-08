@extends('admin.master.index')

@section('headerScript')
    <link href="/admin/plugins/datatables/datatables.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="col-12 col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                تنظیمات اصلی سایت
            </div>
            <div class="card-body">
                <form method="post" action="/admin/setting/basic" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="col-12">

                        <img src="/images/{{$settings->where('setting','logo')->first()['value']}}" width="150px" />
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="logo">لگوی سایت</label>
                            <input type="file" class="form-control-file" id="logo" name="logo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">آدرس:</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{$settings->where('setting','address')->first()['value']}}">
                    </div>
                    <div class="form-group">
                        <label for="tel">تلفن  تماس:</label>
                        <input type="text" class="form-control" id="tel" name="tel" value="{{$settings->where('setting','tel')->first()['value']}}">
                    </div>
                    <div class="form-group">
                        <label for="email">پست الکترونیکی:</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{$settings->where('setting','email')->first()['value']}}">
                    </div>
                    <button type="submit" class="btn btn-outline-primary" >بروزرسانی</button>
                </form>
            </div>
        </div>
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
