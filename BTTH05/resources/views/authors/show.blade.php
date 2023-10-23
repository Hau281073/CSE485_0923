
@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="align-items: center;"><strong>View Authors</strong></h3></div>
  <div class="card-body">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" name="id" class="form-control" value="{{$author->id}}"  required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{$author->name}}"  required>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" id="" class="form-control" required cols="30" rows="10">{{$author->bio}}</textarea>
        </div>
  </div>
</div>
 
@stop