@extends('layouts.app')
@section('content')
    <h1 style="text-align: center; margin-top: 2%">Edit post</h1>
    @foreach ($post as $post)
        <form action="/posts/edit/{{ $post->id }}" method="post" style="width: 26rem; margin: 0 auto">
            <!-- Name input -->
            @csrf
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form4Example1" class="form-control" name="title" value="{{ $post->title }}" />
                <label class="form-label" for="form4Example1">Title</label>
            </div>

            <!-- Message input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" rows="4"name="content">{{ $post->content ?? '' }}</textarea>
                <label class="form-label" for="form4Example3">Content</label>
            </div>

            <!-- Submit button -->
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Save infor</button>
        </form>
    @endforeach
@endsection
