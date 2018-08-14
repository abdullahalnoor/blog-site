@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new User
  </div>
  <div class="card-body">
    @if( Session::has('message'))
    <h4>
      {{ Session::get('message') }}
    </h4>
    @endif {{--
    <form action="/post/store" method="POST" enctype="multipart/form-data"> --}}
      <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name" class="text-capitalize font-weight-bold">name</label>
          <input type="name" class="form-control" name="name"> @if($errors->has('name'))
          <span class="text-danger font-weight-bold">
              {{ $errors->first('name') }}
            </span> @endif
        </div>
        <div class="form-group">
          <label for="email" class="text-capitalize font-weight-bold">email</label>
          <input type="email" class="form-control" name="email"> @if($errors->has('email'))
          <span class="text-danger font-weight-bold">
                      {{ $errors->first('email') }}
                    </span> @endif
        </div>


        <div class="form-group pt-2">
          <input type="submit" class="btn btn-block btn-info" value="Create New User">
        </div>
      </form>
  </div>
</div>
@endsection