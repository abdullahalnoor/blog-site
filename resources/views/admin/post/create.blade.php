@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new Post
  </div>
  <div class="card-body">
    {{--
    <form action="/post/store" method="POST" enctype="multipart/form-data"> --}}
      <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title" class="text-capitalize font-weight-bold">title</label>
          <input type="text" class="form-control" name="title"> @if($errors->has('title'))
          <span class="text-danger font-weight-bold">
              {{ $errors->first('title') }}
            </span> @endif
        </div>
        <div class="form-group">
          <label for="content" class="text-capitalize font-weight-bold">content</label>
          <textarea class="form-control" name="content"></textarea> @if($errors->has('content'))
          <span class="text-danger font-weight-bold">
                        {{ $errors->first('content') }}
                      </span> @endif
        </div>
        <div class="form-group">
          <label for="category_id">Category</label>
          <select name="category_id" class="form-control">
            <option value="">Select One</option>
            @foreach ($categories as $item)
                <option value="{{$item->id}}"> {{$item->name}} </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="featured" class="text-capitalize font-weight-bold">featured image</label>
          <input type="file" class="form-control" name="featured"> @if($errors->has('featured'))
          <span class="text-danger font-weight-bold">
                        {{ $errors->first('featured') }}
                      </span> @endif
        </div>

        <div class="form-group pt-2">
          <input type="submit" class="btn btn-block btn-info" value="Create New Post">
        </div>
      </form>
  </div>
</div>
@endsection