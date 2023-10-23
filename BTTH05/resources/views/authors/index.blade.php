
@extends('layouts.app')
@section('title','Author')
@section('content')
@include('authors.navbar')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->
<link rel="stylesheet" href="/public/fontawesome-free-6.4.2-web/css/all.min.css">
<link rel="stylesheet" href="/public/fontawesome-free-6.4.2-web/css/brands.css">
<link rel="stylesheet" href="/public/fontawesome-free-6.4.2-web/css/solid.css">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Author Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/authors/create') }}" class="btn btn-success btn-sm" title="Add New Room">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Author
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Bio</th>
                                        <th>Actions</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($authors as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->bio }}</td>

 
                                        <td>
                                            <a href="{{ route('authors.show',$item->id) }}" title="View Author"><button class="btn btn-info btn-sm"><i class="fa-regular fa-eye"></i></button></a>
                                            <a href="{{ route('authors.edit',$item->id) }}" title="Edit Author"><button class="btn btn-primary btn-sm"><i class="fa-regular fa-pen-to-square"></i> </button></a>
 
                                          
                                                <!-- <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('&quot;Confirm delete?&quot;')"><i class="bi bi-trash"></i> </button> -->
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$item->id}}" ><i class="fa-regular fa-trash-can"></i></button>
                                                <!-- Modal -->
                                                <form method="POST" action="{{ route('authors.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                    <div class="modal fade" id="deleteModal-{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE AUTHOR</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Do you want to delete?
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
                                <!-- {{ $authors->links('pagination::bootstrap-5') }} -->
                                {!! $authors->links() !!}
                            </div> 
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection