@extends('component.layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
          Contents
        </div>
        <div class="card-body">
            <div>
                <h5 class="card-title"> {{ $post->name }} </h5>
                <p class="card-text"> {{ $post->description }} </p>
            </div>
            <a href="/post" class="btn btn-success mt-3">Go Back</a>
        </div>
      </div>
</div>
@endsection