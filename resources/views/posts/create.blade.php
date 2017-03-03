
<!-- Create post page -->

@extends('main')

@section('title', '| Create new post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Create new post</h1>
            <hr>

            <!-- Create new post form -->
            {!! Form::open(array('route' => 'posts.store')) !!}

                <!-- title -->
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}

                <!-- Body -->
                {{ Form::label('body', "Post body:", array('class' => 'form-spacing-top')) }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}

                <!-- Submit button -->
                {{ Form::Submit('Create post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px')) }}
            {!! Form::close() !!}

        </div>
    </div>

@endsection

<!-- Javascript library -->
@section('scripts')
    {!! Html::script('js/parsley.js') !!}}
@endsection