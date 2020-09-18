@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br>
        <h4>Edit Category</h4>
        <hr>
        <form method="post" enctype="multipart/form-data" action="{{route('categorys.update',$category->id)}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Category name:</label>
                <input value="{{$category->category_name}}" name="category_name" type="text" class="form-control">
                @if($errors->has('category_name'))
                    <p class="text-danger">{{$errors->first('category_name')}}</p>
                @endif
            </div>


            <div>
                <img style="width: 140px; height: 140px" src="{{asset('storage/'.$category->image)}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image: </label>
                <input value="{{asset('storage/'.$category->image)}}" name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                @if($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                @endif
            </div>

            <button type="submit" class="btn btn-info">Update Category</button>
            <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>

    </div>
@endsection
