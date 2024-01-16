@extends('template')

@section('title')
    Blog
@endsection

@section('content')
    <h1>Listado</h1>
    @foreach ($posts as $post)
        <h3>
            <a href="{{route('post', $post['slug'])}}">{{ $post['title'] }}</a>
        </h3>
        <p>{{ $post['id']}}</p>
    @endforeach
    
@endsection