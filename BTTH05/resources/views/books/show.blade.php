
@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header"><h3 style="align-items: center;"><strong>View Books</strong></h3></div>
  <div class="card-body">
        <div class="form-group">
            <label for="author_id">Author_id:</label>
            <input type="text" name="author_id" class="form-control" value="{{$book->author_id}}"  required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{$book->title}}"  required>
        </div>
        
  </div>
</div>
 
@stop