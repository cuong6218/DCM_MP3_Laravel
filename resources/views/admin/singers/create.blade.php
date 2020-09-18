@extends('admin.layout.master')
@section('table')
    <div class="container-fluid">
        <h1 class="mt-4">Form Add Singer</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Singers / Add</li>
        </ol>
    <form method="post" action="{{route('singers.store')}}" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="singer_name" value="{{old('singer_name')}}" placeholder="Nguyễn Văn A">
        @if($errors->has('singer_name'))
            <p class="text-danger">{{$errors->first('singer_name')}}</p>
            @endif
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea class="form-control" name="description">{{old('description')}}</textarea>
        @if($errors->has('description'))
            <p class="text-danger">{{$errors->first('description')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
