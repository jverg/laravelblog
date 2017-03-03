
<!-- Home page -->

@extends('main')

@section('title', '| Homepage')

@section('content')

      <!-- Jumbotron in home page -->
      <div class="row">
          <div class="col-md-12">
              <div class="jumbotron">
                  <h1>Welcome to my blog</h1>
                  <p class="lead">Thank you so much for viting my blogpost!</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a></p>
              </div>
          </div>
      </div>

      <!-- Posts -->
      <div class="row">
          <div class="col-md-8">

              @foreach($posts as $post)

                  <div class="post">
                      <h3>{{ $post->title }}</h3>
                      <p>{{ substr($post->body, 0, 280) }}</p>
                      <a href="#" class="btn btn-primary">Learn more</a>
                  </div>

                  <hr>

              @endforeach
          </div>

          <!-- Sidebar -->
          <dic class="col-md-3 col-md-offset-1">
              <h2>Sidebar</h2>
          </dic>
      </div>
@endsection