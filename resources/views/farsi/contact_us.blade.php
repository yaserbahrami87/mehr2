@extends('farsi.master.index')

@section('content')
    <div class="col-md-6 mx-auto bg-secondary mb-5 p-3" >
        <div class="well well-sm ">
            <form class="form-horizontal" action="/farsi/contactUs" method="post">
                {{csrf_field()}}
                <fieldset >
                    <legend class="text-center">ارتباط با ما</legend>

                    <!-- Name input-->
                    <div class="form-group">
                        <label class=" control-label" for="name">نام و نام خانوادگی: *</label>
                        <div class="">
                            <input id="name" name="name" type="text" placeholder="نام و نام خانوادگی" class="form-control" value="{{old('name')}}">
                        </div>
                    </div>

                    <!-- Tel input-->
                    <div class="form-group">
                        <label class=" control-label" for="email">تلفن تماس:* </label>
                        <div class="">
                            <input id="tel" name="tel" type="number" placeholder="تلفن تماس" class="form-control" value="{{old('tel')}}">
                        </div>
                    </div>

                    <!-- Email input-->
                    <div class="form-group">
                        <label class=" control-label" for="email">پست الکترونیکی: </label>
                        <div class="">
                            <input id="email" name="email" type="text" placeholder="پست الکترونیکی" class="form-control" value="{{old('email')}}">
                        </div>
                    </div>



                    <!-- Message body -->
                    <div class="form-group">
                        <label class=" control-label" for="comment">پیام: *</label>
                        <div class="">
                            <textarea class="form-control" id="comment" name="comment" placeholder="پیام..." rows="5">{{old('comment')}}</textarea>
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-12 text-left">
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
