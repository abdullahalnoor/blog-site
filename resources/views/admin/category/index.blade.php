@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    All Category
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $item)
        <tr>
          <td> {{ $item->name }} </td>
          <td>
            <a href="" class="btn btn-info">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection