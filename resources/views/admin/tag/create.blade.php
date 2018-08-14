@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new Tag
  </div>
  <div class="card-body">
    @if( Session::has('message'))
    <h4>
      {{ Session::get('message') }}
    </h4>
    @endif {{--
    <form action="/post/store" method="POST" enctype="multipart/form-data"> --}}
      <form action="{{route('tag.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="tag" class="text-capitalize font-weight-bold">tag</label>
          <input type="text" class="form-control" name="tag"> @if($errors->has('tag'))
          <span class="text-danger font-weight-bold">
              {{ $errors->first('tag') }}
            </span> @endif
        </div>


        <div class="form-group pt-2">
          <input type="submit" class="btn btn-block btn-info" value="Create New Tag">
        </div>
      </form>
  </div>
</div>
@endsection