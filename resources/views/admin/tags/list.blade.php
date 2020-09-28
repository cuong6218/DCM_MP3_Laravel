@extends('admin.layout.master')
@section('table')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Album</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('songs.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Albums</li>
            </ol>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable
            </div>
            <div class="row">
                <div class="col-md-9">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tags</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tags as $key => $tag)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$tag->name}}</td>
                                <td><a href="{{route('tags.destroy',$tag->id)}}" class="btn btn-danger"
                                       onclick="return confirm('Are you sure')">Delete</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
                </div>

                <div class="col-md-3">
                    <form method="post" action="{{route('tags.store')}}">
                        @csrf
                        <h4>New Tags</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tags : </label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <button id="new-tag" type="submit" class="btn btn-primary"> Create New Tags</button>
                    </form>

                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
