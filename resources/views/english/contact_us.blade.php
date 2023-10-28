@extends('english.master.index')

@section('content')
    <div class="col-md-6 mx-auto bg-secondary mb-5 p-3 text-right" dir="ltr">
        <div class="well well-sm ">
            <form class="form-horizontal" action="/english/contactUs" method="post">
                {{csrf_field()}}
                <fieldset >
                    <legend class="text-center">Contact us</legend>

                    <!-- Name input-->
                    <div class="form-group">
                        <label class=" control-label" for="name">Name: *</label>
                        <div class="">
                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                        </div>
                    </div>

                    <!-- Email input-->
                    <div class="form-group">
                        <label class=" control-label" for="email">Your E-mail: *</label>
                        <div class="">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                        </div>
                    </div>

                    <!-- Message body -->
                    <div class="form-group">
                        <label class=" control-label" for="comment">Your message: *</label>
                        <div class="">
                            <textarea class="form-control" id="comment" name="comment" placeholder="Please enter your message here..." rows="5"></textarea>
                        </div>
                    </div>

                    <!-- Form actions -->
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
