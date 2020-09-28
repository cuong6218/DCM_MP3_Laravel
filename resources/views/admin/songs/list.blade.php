@extends('admin.layout.master')
@section('table')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Song</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('songs.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Songs</li>
            </ol>
            <a href="{{route('songs.create')}}" class="btn btn-info mb-4">Add new</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Songs</th>
                            <th scope="col">Author</th>
                            <th scope="col">Audio</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($songs as $key => $song)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$song->song_name}}</td>
                                <td>{{$song->author}}</td>
                                <td><audio controls><source src="{{asset('storage/'.$song->audio)}}" type="audio/mpeg"></audio></td>
                                <td><img style="width: 75px; height: 75px" src="{{asset('storage/'.$song->image)}}"></td>
                                <td><a href="{{route('songs.delete',$song->id)}}" class="btn btn-danger"
                                       onclick="return confirm('Are you sure')">Delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
{{--                    {{$songs->links()}}--}}
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
