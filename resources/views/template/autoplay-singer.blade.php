<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.collaboratescience.com/protoplasm/library/main.js"></script>
    <style>
        body {
            font-size: 14px;
            background-image: url("/storage/images/back-ground.jpg");
            height: 100vh;
            background-size: cover;
            background-blend-mode: multiply;
        }

        #container-1 {
            background-color: white;
            margin-top: 30px;
        }

        .table .thead-dark th {
            text-align: center;
        }
        img {
            margin-left: 100px;
            margin-top: 30px;
            border-radius: 30px;
        }
        .table td, .table th{
            background-color: white;
        }
        #table-1{
            margin-top: 50px;
        }
        #th-name{
            padding-bottom: 30px;
        }
        #th-name2{
            padding-top: 11px;
        }
        #back-add{
            margin-left: 110px;
        }
    </style>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-6">
<img style="width: 350px; height: 350px" src="{{asset('storage/'.$playListSinger[0]->image)}}">
    </div>
    <div class="col-md-6">
        <table class="table" id="table-1">
            <tbody>
            <tr>
                <td class="table-info" colspan="2">Description: {{$playListSinger[0]->description}}</td>
            </tr>
            <tr>

            @foreach($playListSinger as $key => $listSong)
                <td>Musics {{++$key}}: {{$listSong->song_name}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="container" id="container-1">

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col" colspan="" id="th-name">
                Auto Play Music Singer: {{$playListSinger[0]->singer_name}}
            </th>
            <th scope="col" colspan="" id="th-name2">
                <audio class="my_audio" controls preload="none" autoplay></audio>
            </th>
        </tr>
        </thead>
    </table>
</div>
<button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

<script>
    playlist = {
        @foreach($playListSinger as $key=>$test)
        'song_{{++$key}}': '{{asset('storage/'.$test->audio)}}',
        @endforeach

    }
    $(".my_audio").trigger('load');

    keys = Object.keys(playlist);
    $('.my_audio').append("<source id='sound_src' src=" + playlist[keys[0]] + " type='audio/mpeg'>");


    count = 0;
    $('.my_audio').on('ended', function() {
        count++;
        $("#sound_src").attr("src", playlist[keys[count]])[0];
        $(".my_audio").trigger('load');
        play_audio('play');
    });

</script>
</body>
</html>
