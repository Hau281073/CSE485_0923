@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header"><h3><strong>Edit Authors</strong></h3></div>
  <div class="card-body">
    <form action="{{route('authors.update',$author->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{$author->name}}"  required>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" id="" class="form-control" required cols="30" rows="10">{{$author->bio}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
      
  </div>
</div>
 
@stop