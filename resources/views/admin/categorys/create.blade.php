@extends('admin.layout.master')
@section('table')
    <div class="container-fluid">
        <h1 class="mt-4">Add Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('songs.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Categories / Add</li>
        </ol>
        <form method="post" enctype="multipart/form-data" action="">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category name:</label>
                <input name="category_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @if($errors->has('category_name'))
                    <p class="text-danger">{{$errors->first('category_name')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image: </label>
                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                @if($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                @endif
            </div>


            <button type="submit" class="btn btn-info">Add Category</button>
            <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>
@endsection
