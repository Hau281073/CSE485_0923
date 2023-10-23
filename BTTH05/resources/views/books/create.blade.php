@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header"><h3><strong>Add Books</strong></h3></div>
  <div class="card-body">
    <form action="{{route('books.store')}}" method="POST">
    @csrf
    <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author_id">Author_id:</label>
            <input type="text" name="author_id" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
      
  </div>
</div>
 
@stop