
<!-- Show a post -->

@extends('main')

@section('title', '| Edit post')

@section('content')

    <!-- Main content -->
    <div class="row">
        <div class="col-md-8">
        {!! Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PATCH')) !!}

            <!-- Edit post title -->
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array("class" => 'form-control input-lg')) }}

            <!-- Edit post body -->
            {{ Form::label('body', 'Body:', array('class' => 'form-spacing-top')) }}
            {{ Form::textarea('body', null, array("class" => 'form-control')) }}
        </div>

        <!-- Sidebar -->
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

                    <!-- Cancel button -->
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>

                    <!-- Save button -->
                    <div class="col-sm-6">
                        {{ Form::submit('Save', array('class' => 'btn btn-success btn-block')) }}
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection
