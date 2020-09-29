@extends('admin.layout.master')
@section('table')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Table Tag</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('songs.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Tags</li>
            </ol>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable
            </div>
            <div class="row">
                <div class="col-md-6">
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
                        <h4 class="text-center">New Tags</h4>
                        <div class="form-group" >
                            <label>Tags : </label>
                            <input type="text"  name="name" class="form-control">
                            @if($errors->has('name'))
                                <p class="text-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>

                        <button  type="submit" class="btn btn-primary"> Create New Tags</button>
                    </form>

                </div>
            </div>

        </div>

        </div>

    </main>
@endsection
