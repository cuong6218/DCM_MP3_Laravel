@extends('admin.layout.master')
@section('table')
    <div class="container-fluid">
        <h1>Form Add Singer</h1>
    <form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" name="singer_name" placeholder="Nguyễn Văn A">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
