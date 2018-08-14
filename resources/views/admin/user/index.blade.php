@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    All Users

    <a href="{{route('user.create')}}" class="btn btn-primary float-right">Add User</a>
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Permissions</th>
          <th>Delete</th>

        </tr>
      </thead>
      <tbody>
        @foreach($users as $item)
        <tr>
          <td> <img src="{{ asset($item->profile->avatar) }}" alt="{{ $item->title }}" style="width:50px; height:50ps"></td>

          <td> {{ $item->name }} </td>
          <td>
            @if($item->admin == 0)
            <a href="{{route('make.admin',['id'=> $item->id])}}">Make Admin</a> @else
            <a href="{{route('remove.admin',['id'=> $item->id])}}">Remove Permission</a> @endif
          </td>
          <td> fds </td>



        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection