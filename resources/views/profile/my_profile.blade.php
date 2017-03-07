
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
                            <h2>{{ $user->name }}</h2><hr>
                            <p>
                                <h4>Social</h4>
                                <i class="fa fa-facebook-official"></i><a href="#"> Facebook</a><br>
                                <i class="fa fa-twitter"></i><a href="#"> Twitter</a>
                            </p><hr>
                            <p>
                                <h5><i class="glyphicon glyphicon-map-marker"></i>   San Francisco, USA</h5>
                                <h5><i class="glyphicon glyphicon-envelope"></i>   {{ $user->email }}</h5>
                                <h5><i class="glyphicon glyphicon-gift"></i>   June 02, 1988</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection