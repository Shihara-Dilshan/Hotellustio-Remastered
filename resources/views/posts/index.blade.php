@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    <p>Posts</p>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        @endforeach
    @endif
@endsection
