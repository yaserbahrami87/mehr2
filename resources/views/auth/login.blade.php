@extends('farsi.master.index')

@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-transparent border border-light text-light">
                    <div class="card-header">{{ __('ورود') }}</div>
                    <div class="card-body border border-light text-light">
                        <form method="POST" action="{{ route('login') }}">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('تلفن همراه:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور:') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ورود') }}
                                    </button>
                                    <a class="btn btn-link" href="/farsi/register">
                                        {{ __('ثبت نام') }}
                                    </a>
                                    @if (Route::has('password.request'))

                                        <a class="btn btn-link" href="/password/reset">
                                            {{ __('رمز خود را فراموش کردید؟') }}
                                        </a>

                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
