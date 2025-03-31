@extends('component.layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
          New Post
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
            </ul>
        </div>
        @endif
        <div class="card-body">
            <form action="/post/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" value="{{ old('name', $post->name) }}" name="name" placeholder="Enter Name">
                </div>

                <div class="form-group mt-4">
                  <label>Description</label>
                  <textarea name="description" class="form-control" placeholder="Enter description"> {{ old('description',$post->description) }} </textarea>
                </div>

                <div class="form-group mt-4">
                  <select name="category_id" id="" class="form-control">
                    <option value="">Select category</option>
                    @foreach ($category as $cate)
                      <option value=" {{ $cate->id }}" {{ $cate->id == $post->category_id ? 'selected' : '' }}> {{ $cate->name }} </option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                <a href="/post" class="btn btn-success mt-4">Back</a>
              </form>
        </div>
      </div>
</div>
@endsection