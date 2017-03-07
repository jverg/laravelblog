
<!-- Show welcome page -->

@extends('main')

@section('title', "| Blog" )

@section('content')

    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>

@endsection