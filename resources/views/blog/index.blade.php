
<!-- Show welcome posts -->

@extends('main')

@section('title', "| Blog" )

@section('content')

    <!-- Main body of each post -->
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>{{ $post->title }}</h2>
                <h4>{{ date('M j, Y', strtotime($post->created_at)) }}</h4>
                <p>{{ substr($post->body, 0, 250) }}</p>

                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read more</a>
                <hr>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@endsection
