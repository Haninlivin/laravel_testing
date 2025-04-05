@extends('component.layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
          New Post
        </div>
        <div class="card-body">
            <form action="/post" method="POST">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group mt-4">
                  <label>Description</label>
                  <textarea name="description" class="form-control" placeholder="Enter description" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                <a href="/post" class="btn btn-success mt-4">Back</a>
              </form>
        </div>
      </div>
</div>
@endsection