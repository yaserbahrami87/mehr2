@extends('admin.master.index')

@section('content')
    <div class="col-12 card " >

        <div class="card-body">
            <div class="row">
                @foreach($competitions as $competition)
                    <div class="col-12 col-md-3">

                        <div class="card" >
                            <img src="/images/competition/thumbnail_{{$competition->image}}" class="card-img-top" alt="..." height="160px">
                            <div class="card-body">
                                <p > نام اثر: <b class="card-title">{{$competition->title}}</b></p>

                                <p>توضیحات: <b class="card-text">{{$competition->description}}</b></p>
                            </div>
                            <div class="card-footer">
                                <a href="/images/competition/{{$competition->image}}" class="btn btn-primary btn-sm   " target="_blank">
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
    </div>
@endsection
