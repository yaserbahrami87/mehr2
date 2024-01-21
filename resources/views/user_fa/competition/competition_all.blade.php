@extends('user_fa.master.index')

@section('content')
    @foreach(Auth::user()->competitions->groupby('competiton_category_id') as $competition)

    <div class="col-12">
        <div class="card">
            <h5 class="card-header">{{$competition[0]->competition_category->category_fa}}</h5>
            <div class="card-body">
                <div class="row">
                    @foreach($competition->where('festival_id','=',$festival->id) as $competiton)
                        <div class="card col-12 col-md-3" >
                            <img src="/images/competition/{{$competiton->image}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$competiton->title}}</h5>

                            </div>
                            <div class="card-footer text-muted">
                                <a href="/panel/competiton/{{$competiton->id}}/edit" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>

                                <form class="d-inline" method="post" action="/panel/competiton/{{$competiton->id}}" onsubmit="return window.confirm('آیا از حذف عکس مورد نظر اطمینان دارید؟')">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" value="{{$competiton->id}}" name="competition_id" />
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </form>


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    @endforeach
@endsection
