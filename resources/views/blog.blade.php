@extends('template')

@section('title')
    Blog
@endsection

@section('content')
    <h1>Listado</h1>
    @foreach ($posts as $post)
        <h3 style="display: flex; align-items: center;gap: 10px">
            <p>{{ $post['id']}}</p>
            <a href="{{route('post', $post['slug'])}}">{{ $post['title'] }}</a>
        </h3>
        <span>{{ $post->user['name'] }}</span>
        <hr>
        
        
    @endforeach

    {{ $posts->links() }}
    
@endsection