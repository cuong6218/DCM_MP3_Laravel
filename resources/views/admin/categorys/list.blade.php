@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br>
        <a href="{{route('categorys.create')}}" class="btn btn-info">Add Category</a>
        <hr>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categorys</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(empty($categorys))
                <tr>
                    <td>No data</td>
                </tr>
            @else
                @foreach($categorys as $key=>$category)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$category->category_name}}</td>
                        <td><img style="width: 75px; height: 75px" src="{{asset('storage/'.$category->image)}}"></td>
                        <td><a href="{{route('categorys.edit',$category->id)}}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{route('categorys.delete',$category->id)}}" class="btn btn-danger"
                               onclick="return confirm('Are you sure')">Delete</a></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>



@endsection
