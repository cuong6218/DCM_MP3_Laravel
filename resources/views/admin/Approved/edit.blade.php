@extends('admin.layout.master')
@section('table')

    <div class="container">
        <br><br>

        <br><br>
        <table class="table table-striped">
            <thead class="table-info">
            <tr>
                <th scope="col" colspan="3"><h5>Music Name: {{$music->music_name}}</h5></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Music audio:</th>
                <td>
                    <audio controls>
                        <source src="{{asset('storage/'.$music->audio)}}" type="audio/mpeg">
                    </audio>
                </td>

            </tr>
            <tr>
                <th scope="row">Music image</th>
                <td><img style="width: 50px; height: 50px" src="{{asset('storage/'.$music->image)}}">
                </td>
            </tr>
            <tr>
                <th scope="row">Music singer</th>
                <td>{{$singer->singer_name}}</td>
            </tr>
            <form method="post" action="{{route('browser.approved.edit',$music->id)}}">
                @csrf
                <tr>
                    <th scope="row">Music status</th>
                    <td>
                        <div class="form-group">
                            <select name="status" class="form-control" id="exampleFormControlSelect1">
                                <option value="approved">approved</option>
                                <option value="notApproved">Not Approved</option>
                            </select>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class="btn btn-success">Censorship</button>

        </form>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
    </div>


@endsection
