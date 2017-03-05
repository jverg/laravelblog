
<!-- Show a post -->

@extends('main')

@section('title', '| View post')

@section('content')

    <!-- Main content -->
    <div class="row">
        <div class="col-md-8">
            <!-- Post title -->
            <h1>{{ $post->title }}</h1><br>

            <!-- The date of the post -->
            <h4>{{ date('M j, Y', strtotime($post->created_at)) }}</h4><br>

            <!-- Post body -->
            <p class="lead">{!! $post->body !!}</p>

            <!-- comments -->
            <div id="backend-comments" style="margin-top: 50px">
                <h3>Comments:<small>{{ $post->comments()->count() }}</small></h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th width="70px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post->comments as $comment)
                            <tr>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td width="70px">
                                    <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
