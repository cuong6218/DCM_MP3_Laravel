@section('content')
<form method="post" action="{{route('songs.addSong')}}">
    <select class="form-group" name="playlist_id">
        @foreach($playlists as $playlist)
        <option class="form-control" value="{{$playlist_id}}">{{$playlist->playlist_name}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-secondary">Add Song to Playlist</button>
</form>
@endsection
