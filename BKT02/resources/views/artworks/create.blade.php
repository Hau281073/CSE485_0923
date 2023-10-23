@extends('layouts.app')
@section('content')
@section('title','Artwork')
 
<div class="card">
  <div class="card-header"><h3><strong>Add Artworks</strong></h3></div>
  <div class="card-body">
    <form action="{{route('artworks.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="artist_name">Artist_Name:</label>
            <input type="text" name="artist_name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" name="description" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="art_type">Art_Type:</label>
          <select class="form-select" name="art_type" required>
            <option value="hội hoạ">hội hoạ</option>
            <option value="âm nhạc">âm nhạc</option>
            <option value="văn học">văn học</option>
          </select>
        </div>
        <div class="form-group">
          <label for="media_link">Media_Link:</label>
          <input type="text" name="media_link" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="cover_image">Cover_Image:</label>
          <input type="text" name="cover_image" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
      
  </div>
</div>
 
@stop