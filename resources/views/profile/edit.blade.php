
@extends('main')

@section('title', "| Blog" )

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-6 col-md-8">
                            {!! Form::open(array('route' => 'user.store')) !!}
                                <p>
                                    <h4>Username:</h4>
                                    {{ Form::text('name', $user->name, array('class' => 'form-control')) }}<hr>
                                </p>
                                <p>
                                    <h4>Social</h4>
                                    <i class="fa fa-facebook-official fa-2x"></i>
                                    {{ Form::text('facebook', $user->facebook, array('class' => 'form-control small-col ')) }}
                                    <br>

                                    <i class="fa fa-twitter fa-2x"></i>
                                    {{ Form::text('twitter', $user->twitter, array('class' => 'form-control small-col')) }}

                                </p><br><hr>
                                <p>
                                    <i class="fa fa-map-marker fa-2x"></i>
                                    {{ Form::text('address', $user->address, array('class' => 'form-control small-col')) }}
                                    <i class="fa fa-envelope fa-2x"></i>
                                    {{ Form::text('email', $user->email, array('class' => 'form-control small-col')) }}
                                    <i class="fa fa-gift fa-2x"></i>
                                    {{ Form::text('birthday', $user->birthday, array('class' => 'form-control small-col')) }}
                                </p>

                                <!-- Submit button -->
                                {{ Form::Submit('Save profile', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection