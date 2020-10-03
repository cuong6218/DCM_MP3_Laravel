{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}

{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"--}}
{{--          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
{{--    <script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <script src="https://www.collaboratescience.com/protoplasm/library/main.js"></script>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            font-size: 14px;--}}
{{--            background-image: url("/storage/images/back-ground.jpg");--}}
{{--            height: 100vh;--}}
{{--            background-size: cover;--}}
{{--            background-blend-mode: multiply;--}}
{{--        }--}}

{{--        #container-1 {--}}
{{--            background-color: white;--}}
{{--            margin-top: 30px;--}}
{{--        }--}}

{{--        .table .thead-dark th {--}}
{{--            text-align: center;--}}
{{--        }--}}
{{--        img {--}}
{{--            margin-left: 100px;--}}
{{--            margin-top: 30px;--}}
{{--            border-radius: 30px;--}}
{{--        }--}}
{{--        .table td, .table th{--}}
{{--            background-color: white;--}}
{{--        }--}}
{{--        #table-1{--}}
{{--            margin-top: 50px;--}}
{{--        }--}}
{{--        #th-name{--}}
{{--            padding-bottom: 30px;--}}
{{--        }--}}
{{--        #th-name2{--}}
{{--            padding-top: 11px;--}}
{{--        }--}}
{{--        #back-add{--}}
{{--            margin-left: 110px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--    <div class="col-md-6">--}}
{{--<img style="width: 350px; height: 350px" src="{{asset('storage/'.$playListSinger[0]->image)}}">--}}
{{--    </div>--}}
{{--    <div class="col-md-6">--}}
{{--        <table class="table" id="table-1">--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td class="table-info" colspan="2">Description: {{$playListSinger[0]->description}}</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}

{{--            @foreach($playListSinger as $key => $listSong)--}}
{{--                <td>Musics {{++$key}}: {{$listSong->song_name}}</td>--}}
{{--            </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="container" id="container-1">--}}

{{--    <table class="table">--}}
{{--        <thead class="thead-dark">--}}
{{--        <tr>--}}
{{--            <th scope="col" colspan="" id="th-name">--}}
{{--                Auto Play Music Singer: {{$playListSinger[0]->singer_name}}--}}
{{--            </th>--}}
{{--            <th scope="col" colspan="" id="th-name2">--}}
{{--                <audio class="my_audio" controls preload="none" autoplay></audio>--}}
{{--            </th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--    </table>--}}
{{--</div>--}}
{{--<button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>--}}


{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"--}}
{{--        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"--}}
{{--        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"--}}
{{--        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"--}}
{{--        crossorigin="anonymous"></script>--}}

{{--<script>--}}
{{--    playlist = {--}}
{{--        @foreach($playListSinger as $key=>$test)--}}
{{--        'song_{{++$key}}': '{{asset('storage/'.$test->audio)}}',--}}
{{--        @endforeach--}}

{{--    }--}}
{{--    $(".my_audio").trigger('load');--}}

{{--    keys = Object.keys(playlist);--}}
{{--    $('.my_audio').append("<source id='sound_src' src=" + playlist[keys[0]] + " type='audio/mpeg'>");--}}


{{--    count = 0;--}}
{{--    $('.my_audio').on('ended', function() {--}}
{{--        count++;--}}
{{--        $("#sound_src").attr("src", playlist[keys[count]])[0];--}}
{{--        $(".my_audio").trigger('load');--}}
{{--        play_audio('play');--}}
{{--    });--}}

{{--</script>--}}
{{--</body>--}}
{{--</html>--}}




<html>
<head>
    <title>HTML5 Audio Player</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/auto-playlist/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>
<body>
<div id="background-playlist">
    <div class="container ">
        {{--    <div id="audio-image">--}}
        {{--        <img class="cover"/>--}}
        {{--    </div>--}}
        <div class="row">
            <div class="col-md-5">
                <div class="box-image-1">
                    <img src="{{asset('storage/'.$playListSinger[0]->image)}}">
                </div>
                <div class="row text-center" id="audio-player">
                    <div class="col-md-12">
                        <div>
                            <div>
                                <input id="volume" type="range" min="0" max="10" value="5"/>
                            </div>
                            <div id="buttons">
                                <div class="clearfix"></div>
                                <div id="tracker">
                                    <div class="row">
                                        <div id="progressBar">
                                            <span id="progress"></span>
                                        </div>
                                    </div>

                                    <span id="duration"></span>
                                </div>
                                <div class="clearfix"></div>
                                <span>
                                    <button class="btn btn-info" id="prev"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
			                <button class="btn btn-info" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
			                <button class="btn btn-info" id="pause"><i class="fa fa-pause" aria-hidden="true"></i></button>
			                <button class="btn btn-info" id="stop"><i class="fa fa-stop" aria-hidden="true"></i></button>
			                <button class="btn btn-info" id="next"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
			            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="box-content-1">
                    <div>
                        <p>{{$playListSinger[0]->description}}</p>
                        <div>

                            <ul id="playlist" class="hidden list-group">
                                @foreach($playListSinger as $key=>$test)
                                    <li class="list-group-item active" song="{{asset('storage/'.$test->audio)}}"
                                        cover="{{asset('storage/'.$test->image)}}"
                                        artist="{{asset('storage/'.$test->audio)}}">{{$test->song_name}}</li>
                                @endforeach
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="/auto-playlist/jquery.js"></script>
<script>
    var audio;

    //Hid Pause Initially
    $('#pause').hide();

    //Initializer - Play First Song
    initAudio($('#playlist li:first-child'));

    function initAudio(element) {
        var song = element.attr('song');
        var title = element.text();
        var cover = element.attr('cover');
        var artist = element.attr('artist');

        //Create a New Audio Object
        audio = new Audio(song);

        if (!audio.currentTime) {
            $('#duration').html('0.00');
        }

        $('#audio-player .title').text(title);
        $('#audio-player .artist').text(artist);

        //Insert Cover Image
        $('img.cover').attr('src', 'images/covers/' + cover);

        $('#playlist li').removeClass('active');
        element.addClass('active');
    }


    //Play Button
    $('#play').click(function () {
        audio.play();
        $('#play').hide();
        $('#pause').show();
        $('#duration').fadeIn(400);
        showDuration();
    });

    //Pause Button
    $('#pause').click(function () {
        audio.pause();
        $('#pause').hide();
        $('#play').show();
    });

    //Stop Button
    $('#stop').click(function () {
        audio.pause();
        audio.currentTime = 0;
        $('#pause').hide();
        $('#play').show();
        $('#duration').fadeOut(400);
    });

    //Next Button
    $('#next').click(function () {
        audio.pause();
        var next = $('#playlist li.active').next();
        if (next.length == 0) {
            next = $('#playlist li:first-child');
        }
        initAudio(next);
        audio.play();
        showDuration();
    });

    //Prev Button
    $('#prev').click(function () {
        audio.pause();
        var prev = $('#playlist li.active').prev();
        if (prev.length == 0) {
            prev = $('#playlist li:last-child');
        }
        initAudio(prev);
        audio.play();
        showDuration();
    });

    //Playlist Song Click
    $('#playlist li').click(function () {
        audio.pause();
        initAudio($(this));
        $('#play').hide();
        $('#pause').show();
        $('#duration').fadeIn(400);
        audio.play();
        showDuration();
    });

    //Volume Control
    $('#volume').change(function () {
        audio.volume = parseFloat(this.value / 10);
    });

    //Time Duration
    function showDuration() {
        $(audio).bind('timeupdate', function () {
            //Get hours and minutes
            var s = parseInt(audio.currentTime % 60);
            var m = parseInt((audio.currentTime / 60) % 60);
            //Add 0 if seconds less than 10
            if (s < 10) {
                s = '0' + s;
            }
            $('#duration').html(m + '.' + s);
            var value = 0;
            if (audio.currentTime > 0) {
                value = Math.floor((100 / audio.duration) * audio.currentTime);
            }
            $('#progress').css('width', value + '%');
        });
    }

</script>
</body>
</html>



