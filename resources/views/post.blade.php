@extends('template')

@section('title')
    Post
@endsection

@section('content')

    <h1>{{ $post['title'] }} Detalles: </h1>
    <p> {{ $post['slug'] }}</p>
    <p>{{ $post['body'] }}</p>

@endsection