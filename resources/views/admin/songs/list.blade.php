@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br>
        <a href="{{route('songs.create')}}" class="btn btn-info">Add Songs</a>
        <hr>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Songs</th>
                <th scope="col">Author</th>
                <th scope="col">Audio</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(empty($songs))
                <tr>
                    <td>No data</td>
                </tr>
            @else
                @foreach($songs as $key=>$song)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$song->song_name}}</td>
                        <td>{{$song->author}}</td>
                        <td><audio controls><source src="{{asset('storage/'.$song->audio)}}" type="audio/mpeg"></audio></td>
                        <td><img style="width: 75px; height: 75px" src="{{asset('storage/'.$song->image)}}"></td>
                        <td><a href="{{route('songs.edit',$song->id)}}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{route('songs.delete',$song->id)}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


@endsection
