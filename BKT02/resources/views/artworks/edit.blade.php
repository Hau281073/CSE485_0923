@extends('layouts.app')
@section('content')
@section('title','Artwork')
 
<div class="card">
  <div class="card-header"><h3><strong>Edit Artworks</strong></h3></div>
  <div class="card-body">
    <form action="{{route('artworks.update',$artwork->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="artist_name">Artist_Name:</label>
            <input type="text" name="artist_name" class="form-control" value="{{$artwork->artist_name}}"  required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="" class="form-control" value="{{$artwork->description}}">
        </div>
        <div class="form-group">
            <label for="art_type">Art_Type:</label>
            <select class="form-select" name="art_type" required>
                <option value="hội hoạ" @if($artwork->art_type == 'hội hoạ') selected @endif>hội hoạ</option>
                <option value="âm nhạc" @if($artwork->art_type == 'âm nhạc') selected @endif>âm nhạc</option>
                <option value="văn học" @if($artwork->art_type == 'văn học') selected @endif>văn học</option>
            </select>
        </div>
        <div class="form-group">
            <label for="media_link">Media_Link:</label>
            <input type="text" name="media_link" class="form-control" value="{{$artwork->media_link}}"  required>
        </div>
        <div class="form-group">
            <label for="cover_image">Cover_Image:</label>
            <input type="text" name="cover_image" class="form-control" value="{{$artwork->cover_image}}"  required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
      
  </div>
</div>
 
@stop