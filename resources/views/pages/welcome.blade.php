
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
              <div class="post">
                  <h3>Post Title</h3>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                      in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <a href="#" class="btn btn-primary">Learn more</a>
              </div>

              <hr>

              <div class="post">
                  <h3>Post Title</h3>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                      in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <a href="#" class="btn btn-primary">Learn more</a>
              </div>

              <hr>

              <div class="post">
                  <h3>Post Title</h3>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                      esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                      in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <a href="#" class="btn btn-primary">Learn more</a>
              </div>
          </div>

          <hr>

          <!-- Sidebar -->
          <dic class="col-md-3 col-md-offset-1">
              <h2>Sidebar</h2>
          </dic>
      </div>
@endsection