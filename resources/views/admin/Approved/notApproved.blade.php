@extends('admin.layout.master')
@section('table')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Song Status</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('songs.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Song Status / Not Approved</li>
            </ol>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="{{route('browser.pending')}}">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('browser.notApproved.list')}}">Not Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('browser.approved')}}">Approved</a>
            </li>
        </ul>
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
                            <th scope="col">Music</th>
                            <th scope="col">Audio</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($musics as $key => $music)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$music->music_name}}</td>
                                <td>
                                    <audio controls>
                                        <source src="{{asset('storage/'.$music->audio)}}" type="audio/mpeg">
                                    </audio>
                                </td>
                                <td><img style="width: 50px; height: 50px" src="{{asset('storage/'.$music->image)}}">
                                </td>
                                <td><a class="btn btn-danger">{{$music->status}}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
