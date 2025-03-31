@extends('component.layout')
@section('content')
<div class="container">
  <div>
    <a href="/post/create" class="btn btn-success mb-3">Add New</a>
    <a href="logout" class="btn btn-success mb-3">Logout</a>
  </div>
    <div class="card">
        <div class="card-header text-center">
          Contents
        </div>
        <div class="card-body">
          @foreach ($data as $post )
            <div>
                <h5 class="card-title"> {{ $post->name }} </h5>
                <p class="card-text"> {{ $post->description }} </p>
                <a href="/post/{{ $post->id }}" class="btn btn-primary">Show</a>
                <a href="/post/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
                <form action="/post/{{ $post->id }}" method="POST" class="mt-2">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">Delete</button>
                </form>
            </div>
            <br>
          @endforeach
        </div>
      </div>
</div>
@endsection