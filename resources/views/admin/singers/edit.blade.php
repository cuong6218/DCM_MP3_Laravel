@extends('admin.layout.master')
@section('table')
    <div class="container-fluid">
        <h1 class="mt-4">Update Singer</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Singers / Update</li>
        </ol>
        <form method="post" action="{{route('singers.update', $singer->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="singer_name" value="{{$singer->singer_name}}" placeholder="Nguyễn Văn A">
                @if($errors->has('singer_name'))
                    <p class="text-danger">{{$errors->first('singer_name')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea class="form-control" name="description">{{$singer->description}}</textarea>
                @if($errors->has('description'))
                    <p class="text-danger">{{$errors->first('description')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>
@endsection
