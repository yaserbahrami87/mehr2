@extends('admin.master.index')

@section('headerScript')
    <link href="/plugins/dataTables/datatables.css" rel="stylesheet" />
    <link href="/plugins/dataTables/buttons.dataTables.min.css" rel="stylesheet" />
@endsection


@section('content')

    <div class="col-12 card " >

        <div class="card-body">
            <div class="row">
                <div class="col-12 mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">#</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">لیست همه شرکت کننده ها</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                @foreach($competitions as $competition)
                                    <div class="col-12 col-md-3">

                                        <div class="card" >
                                            <img src="/images/competition/thumbnail_{{$competition->image}}" class="card-img-top" alt="..." height="160px">
                                            <div class="card-body">
                                                <p>نام ارسال کنند:  <a href="/admin/user/{{$competition->user_id}}">{{$competition->user->fname.' '.$competition->user->lname}}</a>  </p>
                                                <p > نام اثر: <b class="card-title">{{$competition->title}}</b></p>

                                                <p>توضیحات: <b class="card-text">{{$competition->description}}</b></p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="/admin/competiton/{{$competition->id}}" class="btn btn-primary btn-sm   " target="_blank">
                                                    مشاهده
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                                <div class="col-12">
                                    {{$competitions->links()}}
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade table-responsive" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="col-12 table-responsive">
                                <table class="table table-bordered table-hover table-striped " id="dataTable">
                                    <thead>
                                    <th>مشخصات</th>
                                    <th>نام اثر</th>
                                    <th>ایمیل</th>
                                    <th>تلفن</th>
                                    </thead>
                                    <tbody>
                                    @foreach($competition_lists as $item)

                                        <tr>
                                            <td>{{$item->user->fname.' '.$item->user->lname}}</td>
                                            <td>{{$item->title}}</td>
                                            <td dir="ltr">{{$item->user->email}}</td>
                                            <td dir="ltr">{{$item->user->tel}}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection


@section('footerScript')
    <script src="/plugins/dataTables/datatables.js"></script>
    <script src="/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/dataTables/dataTables.buttons.min.js"></script>
    <script src="/plugins/dataTables/jszip.min.js"></script>
    <script src="/plugins/dataTables/vfs_fonts.js"></script>

    <script src="/plugins/dataTables/buttons.html5.min.js"></script>
    <script src="/plugins/dataTables/buttons.print.min.js"></script>




    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({

                dom: 'Bfrltip',
                buttons: [
                    'copy',  'excel'
                ],

            });
        });
    </script>
@endsection

