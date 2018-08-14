@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    Create a new Category
  </div>
  <div class="card-body">
    @if( Session::has('message'))
    <h4>
      {{ Session::get('message') }}
    </h4>
    @endif
    <form action="{{route('update.setting')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="site_name" class="text-capitalize font-weight-bold">site name</label>
        <input type="text" class="form-control" name="site_name" value="{{$setting->site_name}}"> @if($errors->has('site_name'))
        <span class="text-danger font-weight-bold">
              {{ $errors->first('site_name') }}
            </span> @endif
      </div>
      <div class="form-group">
        <label for="contact_number" class="text-capitalize font-weight-bold">contact numbere</label>
        <input type="text" class="form-control" name="contact_number" value="{{$setting->contact_number}}"> @if($errors->has('contact_number'))
        <span class="text-danger font-weight-bold">
                    {{ $errors->first('contact_number') }}
                  </span> @endif
      </div>
      <div class="form-group">
        <label for="contact_email" class="text-capitalize font-weight-bold">contact email</label>
        <input type="text" class="form-control" name="contact_email" value="{{$setting->contact_email}}"> @if($errors->has('contact_email'))
        <span class="text-danger font-weight-bold">
                    {{ $errors->first('contact_email') }}
                  </span> @endif
      </div>
      <div class="form-group">
        <label for="contact_address" class="text-capitalize font-weight-bold">contact address </label>
        <input type="text" class="form-control" name="contact_address" value="{{$setting->contact_address}}"> @if($errors->has('contact_address'))
        <span class="text-danger font-weight-bold">
                    {{ $errors->first('contact_address') }}
                  </span> @endif
      </div>


      <div class="form-group pt-2">
        <input type="submit" class="btn btn-block btn-info" value="Create New Category">
      </div>
    </form>
  </div>
</div>
@endsection