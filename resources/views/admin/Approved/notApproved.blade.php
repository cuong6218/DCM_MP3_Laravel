@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br><br>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link " href="{{route('browser.pending')}}">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{route('browser.notApproved.list')}}">Not Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('browser.approved')}}">Approved</a>
            </li>
        </ul>
        <br><br>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Music</th>
                <th scope="col">Audio</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(empty($musics))
                <tr>
                    <td>No data</td>
                </tr>
            @else
                @foreach($musics as $key => $music)
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

            </tbody>
            @endforeach
            @endif
        </table>
    </div>


@endsection
