@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br>
        <h4>Add Songs</h4>
        <hr>
        <form method="post" enctype="multipart/form-data" action="">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Songs name:</label>
                <input value="{{old('song_name')}}" name="song_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @if($errors->has('song_name'))
                    <p class="text-danger">{{$errors->first('song_name')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Songs author:</label>
                <input value="{{old('author')}}" name="author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @if($errors->has('author'))
                    <p class="text-danger">{{$errors->first('author')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Songs Image: </label>
                <input value="{{old('image')}}" name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                @if($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Songs Audio: </label>
                <input value="{{old('audio')}}" name="audio" type="file" class="form-control-file" id="exampleFormControlFile1">
                @if($errors->has('audio'))
                    <p class="text-danger">{{$errors->first('audio')}}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Songs Album:</label>
                <select name="album_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach($albums as $album)
                        <option value="{{$album->id}}">{{$album->album_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Songs Singer:</label>
                <select name="singer_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach($singers as $singer)
                        <option value="{{$singer->id}}">{{$singer->singer_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Songs Category:</label>
                <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                    @foreach($categorys as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-info">Add Songs</button>
            <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>
    <br>
@endsection
