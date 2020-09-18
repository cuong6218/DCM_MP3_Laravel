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
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(empty($categorys))
            <tr><td>No data</td></tr>
        @else
            @foreach($categorys as $key=>$category)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$category->category_name}}</td>
            <td>{{$category->image}}</td>
            <td><a href="" class="btn btn-success">Edit</a></td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        </tbody>
    </table>
</div>
@endforeach
@endif


@endsection
