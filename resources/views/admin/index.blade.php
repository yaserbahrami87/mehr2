@extends('admin.master.index')
@section('content')
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{($users->count())}}</h3>

                <p>افراد شرکت کننده</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="/admin/user" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$competition->count()}}</h3>

                <p>تعداد کل اثر ارسالی</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="/admin/competiton" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>


        </div>
    </div>


    @foreach($competition->groupby('competiton_category_id') as $competitionGroupby)


            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">

                        <h3>{{$competitionGroupby->count()}}</h3>

                        <p>{{$competitionGroupby[0]->competition_category->category_fa}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/admin/competiton?category={{$competitionGroupby[0]->competiton_category_id}}" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>


                </div>
            </div>

    @endforeach


@endsection
