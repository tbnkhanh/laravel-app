@extends('layouts.app')
@section('content')
    <h1 style="text-align: center; margin-top: 2%">Create new posts</h1>

    <form action="/posts" method="post" style="width: 26rem; margin: 0 auto">
        @csrf
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form4Example1">Title</label>
            <input type="text" id="form4Example1" class="form-control" name="title" value="" />
            @if ($errors->has('title'))
                <p class="text-danger">
                    {{ $errors->first('title') }}
                </p>
            @endif

        </div>

        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form4Example3">Content</label>
            <textarea class="form-control" id="form4Example3" rows="4"name="content"></textarea>
            @if ($errors->has('content'))
                <p class="text-danger">
                    {{ $errors->first('content') }}
                </p>
            @endif

        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Create New</button>


    </form>
@endsection
