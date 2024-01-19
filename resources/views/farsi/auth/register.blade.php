@extends('farsi.master.index')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-transparent border-light text-light">
                <div class="card-header  border-light text-light">{{ __('ثبت نام') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('نام:') }} <span class="text-danger ">*</span></label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی:') }} <span class="text-danger ">*</span></label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('پست الکترونیکی:') }} <span class="text-danger ">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" dir="">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('تلفن:') }} <span class="text-danger ">*</span></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control text-right" id="tel_" name="tel" value="{{ old('tel') }}" />
                                @error('tel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" id="states_register">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('مقطع تحصیلی:') }} <span class="text-danger ">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control" id="education" name="education">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option value="1" @if(old('education')==1) selected @endif>دیپلم</option>
                                    <option value="2" @if(old('education')==2) selected @endif >فوق دیپلم</option>
                                    <option value="3" @if(old('education')==3) selected @endif >لیسانس</option>
                                    <option value="4" @if(old('education')==4) selected @endif >فوق لیسانس</option>
                                    <option value="5" @if(old('education')==5) selected @endif >دکتری</option>
                                </select>
                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('رشته تحصیلی:') }} <span class="text-danger ">*</span></label>

                            <div class="col-md-6">
                                <input id="field_study" type="text" class="form-control @error('field_study') is-invalid @enderror" name="field_study" value="{{ old('field_study') }}" autocomplete="field_study">

                                @error('field_study')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" id="states_register">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('استان:') }} <span class="text-danger ">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control" id="state" name="state_id">
                                    <option disabled selected>انتخاب کنید</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" id="cities_register">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('شهرستان:') }}<span class="text-danger ">*</span></label>
                            <div class="col-md-6">
                                <select class="form-control" id="cities" name="city_id">
                                    <option disabled selected>انتخاب کنید</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور:') }}<span class="text-danger ">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز عبور:') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ثبت نام') }}
                                </button>
                                <a class="btn btn-link" href="/farsi/login">
                                    {{ __('ورود') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footerScript')
    <script src="/js/jquery-3.6.1.min.js"></script>
    <script>

        let yas=$.noConflict();
        yas("#state").change(function(){
           let city=$('#state').val();
           yas.ajax({
               type:'GET',
               url:'/state/'+city,
               success:function (data)
               {
                   let cities='';
                   $.each(data,function(key,value){
                       cities+="<option value='"+value.id+"'>"+value.name+"</option>"
                   })
                   $('#cities').html(cities);

               }

           });
        });
    </script>
@endsection
