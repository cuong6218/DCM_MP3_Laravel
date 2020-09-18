@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br>
        <a href="{{route('albums.create')}}" class="btn btn-info">Add Albums</a>
        <hr>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Albums</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(empty($albums))
                <tr>
                    <td>No data</td>
                </tr>
            @else
                @foreach($albums as $key=>$album)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$album->album_name}}</td>
                        <td><img style="width: 75px; height: 75px" src="{{asset('storage/'.$album->image)}}"></td>
                        <td><a href="{{route('albums.edit',$album->id)}}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{route('albums.delete',$album->id)}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>


@endsection
