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
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @forelse($singers as $key => $singer)
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{$singer->singer_name}}</td>
                                <td>{{$singer->description}}</td>
                                <td><img src="{{$singer->image}}" alt="no image" style="width: 60px; height: 60px"></td>
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
