@extends('layouts.app')
@section('content')
    <h1  style="text-align: center; margin-top: 2%">Create new posts</h1> 
    <form action="/posts" method="post" style="width: 26rem; margin: 0 auto">
        <!-- Name input -->
        @csrf
        <div data-mdb-input-init class="form-outline mb-4">
          <input type="text" id="form4Example1" class="form-control" />
          <label class="form-label" for="form4Example1">Title</label>
        </div>
      
        <!-- Message input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Content</label>
        </div>
      
        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Send</button>
      </form>
@endsection 