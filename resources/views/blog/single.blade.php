
<!-- Show a post -->

@extends('main')

@section('title', "| $post->title" )

@section('content')

<!-- Main content of the post -->
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $post->title }}</h1>
        <h4>{{ date('M j, Y', strtotime($post->created_at)) }}</h4>
        <p>{{ $post->body }}</p>
    </div>
</div>

@endsection
