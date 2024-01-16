@extends('template')

@section('title')
    Post
@endsection

@section('content')

    <h1>Detalle</h1>
    <p> {{ $post['slug'] }}</p>

@endsection