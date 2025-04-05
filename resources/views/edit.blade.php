@extends('component.layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
          New Post
        </div>
        <div class="card-body">
            <form action="/post/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" value="{{ $post->name }}" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group mt-4">
                  <label>Description</label>
                  <textarea name="description" class="form-control" placeholder="Enter description" required> {{ $post->description }} </textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                <a href="/post" class="btn btn-success mt-4">Back</a>
              </form>
        </div>
      </div>
</div>
@endsection