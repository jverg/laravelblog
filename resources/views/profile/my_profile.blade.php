
<!-- Show welcome page -->

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
                            <p>

                            <h2><a href="{{ route('user.edit', Auth::id()) }}"><i class="fa fa-pencil"></i></a>
                                {{ $user->name }}
                            </h2><hr>
                            </p>
                            <p>
                                <h4>Social</h4>
                                <i class="fa fa-facebook-official"></i><a href="{{ $user->facebook }}"> Facebook</a><br>
                                <i class="fa fa-twitter"></i><a href="{{ $user->twitter }}"> Twitter</a>
                            </p><hr>
                            <p>
                                <h5><i class="fa fa-map-marker"></i> {{ $user->address }}</h5>
                                <h5><i class="fa fa-envelope"></i>   {{ $user->email }}</h5>
                                <h5><i class="fa fa-gift"></i> {{ $user->birthday }}</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection