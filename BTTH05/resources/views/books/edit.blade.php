@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header"><h3><strong>Edit Books</strong></h3></div>
  <div class="card-body">
    <form action="{{route('books.update',$book->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="author_id">Author_id:</label>
            <input type="text" name="author_id" class="form-control" value="{{$book->author_id}}"  required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{$book->title}}"  required>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
      
  </div>
</div>
 
@stop