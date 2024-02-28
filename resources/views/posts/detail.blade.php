@extends('layouts.app')
@section('content')
    <h1  style="text-align: center; margin-top: 2%">Products detail page</h1> 
    @foreach ($post as $post)
    <h2>ID: {{ $post->id }}</h2>
    <h2>Title:</h2><span>{{ $post->title }}</span>
    <h2>Content: </h2><span>{{ $post->content }}</span>
    <h2>Created_at:</h2><span>{{ $post->created_at }}</span>
    @endforeach
@endsection 