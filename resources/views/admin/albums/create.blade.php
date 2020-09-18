@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br>
        <h4>Add Albums</h4>
        <hr>
        <form method="post" enctype="multipart/form-data" action="">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Albums name:</label>
                <input name="album_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Albums Image: </label>
                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <button type="submit" class="btn btn-info">Add Albums</button>
            <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>

    </div>
@endsection
