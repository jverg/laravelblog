
<!-- Show a post -->

@extends('main')

@section('title', '| View post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <!-- Post title -->
            <h1>{{ $post->title }}</h1>

            <!-- Post body -->
            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <!-- Created at element -->
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>
                <!-- Updated at element -->
                <dl class="dl-horizontal">
                    <dt>Updated at:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
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
                        {!! Html::linkRoute('posts.destroy', 'Delete', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
