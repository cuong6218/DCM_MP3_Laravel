@extends('admin.layout.master')
@section('table')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Singer</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Singers</li>
            </ol>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    DataTable Example
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
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @forelse($singers as $key => $singer)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$singer->singer_name}}</td>
                                <td>{{$singer->description}}</td>
                                <td><img src="{{asset('storage/'.$singer->image)}}" alt="no image" style="width: 100px; height: 60px"></td>
                                <td><a href="{{route('singers.edit', $singer->id)}}" class="btn btn-primary">Update</a> </td>
                                <td><a href="{{route('singers.delete', $singer->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a> </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">No data</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
