@extends('layouts.app')
@section('content')
    <h1 style="text-align: center; margin-top: 2%">This is posts page</h1>
    <a href="/posts/createPage">
        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Create new post</button>
    </a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Time created</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td >
                        <a href="posts/detail/{{ $post->id }}">Details</a>
                        <a href="posts/edit/{{ $post->id }}" >Edit</a>
                        <a href="posts/delete/{{ $post->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
