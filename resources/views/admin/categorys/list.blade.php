@extends('admin.layout.master')
@section('table')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            <a href="{{route('categorys.create')}}" class="btn btn-info mb-4">Add new</a>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categorys as $key => $category)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$category->category_name}}</td>
                                <td><img style="width: 75px; height: 75px" src="{{asset('storage/'.$category->image)}}"></td>
                                <td><a href="{{route('categorys.edit',$category->id)}}" class="btn btn-success">Edit</a></td>
                                <td><a href="{{route('categorys.delete',$category->id)}}" class="btn btn-danger"
                                       onclick="return confirm('Are you sure')">Delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{$categorys->links()}}
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection


