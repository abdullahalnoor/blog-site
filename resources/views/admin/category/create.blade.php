@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new Category
  </div>
  <div class="card-body">
    {{--
    <form action="/post/store" method="POST" enctype="multipart/form-data"> --}}
      <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name" class="text-capitalize font-weight-bold">name</label>
          <input type="text" class="form-control" name="name"> @if($errors->has('name'))
          <span class="text-danger font-weight-bold">
              {{ $errors->first('name') }}
            </span> @endif
        </div>


        <div class="form-group pt-2">
          <input type="submit" class="btn btn-block btn-info" value="Create New Category">
        </div>
      </form>
  </div>
</div>
@endsection