<!-- <form action="{{route('authors.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="bio">Bio:</label>
        <textarea name="bio" id="" class="form-control" required cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form> -->
@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header"><h3><strong>Add Students</strong></h3></div>
  <div class="card-body">
    <form action="{{route('authors.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" class="form-control" required cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
      
  </div>
</div>
 
@stop