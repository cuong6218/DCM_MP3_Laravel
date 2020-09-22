@extends('admin.layout.master')
@section('table')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Album</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('songs.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Albums</li>
            </ol>
            <a href="{{route('albums.create')}}" class="btn btn-info mb-4">Add new</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Albums</th>
                            <th scope="col">Image</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($albums as $key => $album)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$album->album_name}}</td>
                                <td><img style="width: 75px; height: 75px" src="{{asset('storage/'.$album->image)}}"></td>
                                <td><a href="{{route('albums.edit',$album->id)}}" class="btn btn-success">Edit</a></td>
                                <td><a href="{{route('albums.delete',$album->id)}}" class="btn btn-danger"
                                       onclick="return confirm('Are you sure')">Delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$albums->links()}}
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
