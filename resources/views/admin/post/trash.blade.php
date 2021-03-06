@extends('layouts.app') 
@section('content')

<div class="card">
  <div class="card-header">
    All Posts
  </div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Content</th>
          <th>Slug</th>
          <th>Featured</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $item)
        <tr>
          <td> {{ $item->title }} </td>
          <td> {{ $item->content }} </td>
          <td> {{ $item->slug }} </td>
          <td> <img src="{{ $item->featured }}" alt="{{ $item->title }}" style="width:50px; height:50ps"></td>
          <td>
            <a href="{{route('post.hard-delete',['id'=> $item->id])}}" class="btn btn-danger">Delete</a>
            <a href="{{route('post.restore',['id'=> $item->id])}}" class="btn btn-success">Restore</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection