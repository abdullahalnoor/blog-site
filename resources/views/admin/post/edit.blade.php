@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Update Post
  </div>
  <div class="card-body">

    <form action="{{route('post.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title" class="text-capitalize font-weight-bold">title</label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}">
        <input type="hidden" name="id" value="{{$post->id}}"> @if($errors->has('title'))
        <span class="text-danger font-weight-bold">
              {{ $errors->first('title') }}
            </span> @endif
      </div>
      <div class="form-group">
        <label for="content" class="text-capitalize font-weight-bold">content</label>
        <textarea class="form-control" name="content">{{$post->content}}</textarea> @if($errors->has('content'))
        <span class="text-danger font-weight-bold">
                        {{ $errors->first('content') }}
                      </span> @endif
      </div>
      <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control">
            
            @foreach ($categories as $item)
                <option value="{{$item->id}}" {{$item->id == $post->category_id ?'selected':''  }} > {{$item->name}} </option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        @foreach ($tags as $item)
        <div class="checkbox">'
          <label for=""> <input type="checkbox" name="tags[]" value="{{$item->id}}"
           @foreach ($post->tags as $t)
               @if ($item->id == $t->id)
                   checked
               @endif
           @endforeach
            >  {{$item->tag}} </label>
        </div>
        @endforeach
      </div>
      <div class="form-group">
        <label for="featured" class="text-capitalize font-weight-bold">featured image</label>
        <img src="{{ $post->featured }}" alt="{{ $post->title }}" style="width:50px; height:50px">
        <input type="file" class="form-control" name="featured"> @if($errors->has('featured'))
        <span class="text-danger font-weight-bold">
                        {{ $errors->first('featured') }}
                      </span> @endif
      </div>

      <div class="form-group pt-2">
        <input type="submit" class="btn btn-block btn-info" value="Update  Post">
      </div>
    </form>
  </div>
</div>
@endsection