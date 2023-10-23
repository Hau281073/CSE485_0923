
@extends('layouts.app')
@section('title','Artwork')
@section('content')

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->
<link rel="stylesheet" href="{{ asset ('fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <div class="container">
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>Artwork Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/artworks/create') }}" class="btn btn-success btn-sm" title="Add New Artwork">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Artwork
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Artist_Name</th>
                                        <th>Description</th>
                                        <th>Art_Type</th>
                                        <th>Media_Link</th>
                                        <th>Cover_Image</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($artworks as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->artist_name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->art_type }}</td>
                                        <td>{{ $item->media_link }}</td>
                                        <td>
                                            <img src="{{ $item->cover_image }}" alt="Cover Image" style="max-width: 100px; max-height: 100px;">
                                        </td>

                                        <td>
                                            <a href="{{ route('artworks.index',$item->id) }}" title="View Artwork">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('artworks.edit',$item->id) }}" title="Edit Artwork">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$item->id}}">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <!-- Modal and form for delete -->
                                            <form method="POST" action="{{ route('artworks.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <div class="modal fade" id="deleteModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE ARTWORK</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this artwork?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- phaan trang -->
                            <div class="d-flex justify-content-center">
                               
                                {!! $artworks->links() !!}
                            </div> 
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection