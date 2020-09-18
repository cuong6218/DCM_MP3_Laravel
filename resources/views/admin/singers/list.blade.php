@extends('admin.layout.master')
@section('table')
    <div class="container-fluid">
    <table class="table text-center">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @forelse($singers as $key => $singer)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$singer->singer_name}}</td>
            <td>{{$singer->description}}</td>
            <td><img src="{{$singer->image}}" style="width: 60px; height: 60px"></td>
        </tr>
        @empty
        <tr>
            <td>No data</td>
        </tr>
        @endforelse
        </tbody>
    </table>
    </div>
@endsection
