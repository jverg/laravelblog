
<!-- Show a post -->

@extends('main')

@section('title', "| $post->title" )

@section('content')

<!-- Main content of the post -->
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $post->title }}</h1><br>
        <h4>{{ date('M j, Y', strtotime($post->created_at)) }}</h4>
        <p>{!! $post->body !!}</p><br><br>
    </div>
</div>

<!-- COMMENTS -->
@foreach($post->comments as $comment)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table">
                <!-- Username for the comment -->
                <thead>
                <th><span class="glyphicon glyphicon-user"></span>{{ ' ' . $comment->name }}</th>
                </thead>

                <!-- Body of the comment -->
                <tbody>
                <tr>
                    <td>{{ $comment->comment }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div><br>
@endforeach

<div class="row">
    <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px">
        {{ Form::open(array('route' => array('comments.store', $post->id), 'method' => 'POST')) }}
        <div class="row">
            <div class="col-md-6">
                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('email'), 'Email:' }}
                {{ Form::text('email', null, array('class' => 'form-control')) }}
            </div>

            <div class="col-md-12">
                {{ Form::label('comment'), 'Comment:' }}
                {{ Form::textarea('comment', null, array('class' => 'form-control', 'rows' => '5')) }}

                {{ Form::submit('Add comment', array('class' => 'btn btn-success btn-block btn-h1-spacing')) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>

@endsection
