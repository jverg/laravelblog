
<!-- Show a post -->

@extends('main')

@section('title', '| View post')

@section('content')

    <!-- Main content -->
    <div class="row">
        <div class="col-md-8">
            <!-- Post title -->
            <h1>{{ $post->title }}</h1>

            <!-- Post body -->
            <p class="lead">{{ $post->body }}</p>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <div class="well">

                <!-- Created at element -->
                <dl class="dl-horizontal">
                    <label>Created at:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                </dl>

                <!-- Updated at element -->
                <dl class="dl-horizontal">
                    <label>Updated at:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr>

                <!-- Delete and Edit buttons -->
                <div class="row">

                    <!-- Edit button -->
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>

                    <!-- Delete button -->
                    <div class="col-sm-6">
                        {!! Form::open(array('method' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                        {!! Form::close() !!}
                    </div>

                    <!-- Show all posts button -->
                    <div class="row">
                        <div class="col-md-12">
                            {!! Html::linkRoute('posts.index', '<< See all posts', array(), array('class' => 'btn btn-default btn-block btn-h1-spacing')) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
