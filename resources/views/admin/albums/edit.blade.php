@extends('admin.layout.master')
@section('table')
    <div class="container-fluid">
        <h1 class="mt-4">Update Album</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Albums / Update</li>
        </ol>
        <form method="post" enctype="multipart/form-data" action="{{route('albums.update',$album->id)}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Albums name:</label>
                <input value="{{$album->album_name}}" name="album_name" type="text" class="form-control">
                @if($errors->has('album_name'))
                    <p class="text-danger">{{$errors->first('album_name')}}</p>
                @endif
            </div>


            <div>
                <img style="width: 140px; height: 140px" src="{{asset('storage/'.$album->image)}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image: </label>
                <input value="{{asset('storage/'.$album->image)}}" name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                @if($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                @endif
            </div>


            <button type="submit" class="btn btn-info">Update Albums</button>
            <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>
@endsection
