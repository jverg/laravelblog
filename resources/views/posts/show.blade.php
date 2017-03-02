
<!-- Show a post -->

@extends('main')

@section('title', '| View post')

@section('content')

   <p class="lead">This is the blog post</p>

@endsection

@section('scripts')
    {!! Html::script('js/parsley.js') !!}}
@endsection