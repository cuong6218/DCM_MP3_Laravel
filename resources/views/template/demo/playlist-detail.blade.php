@extends('template.demo.master.menu')
@section('content')
    <head>
        <style>
            .audioplayer{
                background-color: #E587DB;
            }
            .audioplayer:not(.audioplayer-playing) .audioplayer-playpause {
                background: linear-gradient(to right, #F3C9CA, #5722a9);
            }

            .audioplayer .audioplayer-volume-adjust div div {
                background: linear-gradient(to right, #cc1573, #5722a9);
            }

        </style>
    </head>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="/Client/img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(/Client/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Playlist Detail</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center box-image-playlist">
                    <img style="width: 100%;" src="{{asset('storage/images/playlist-default.jpg')}}" alt="no image">
                    <h5 class="playlist-name" >{{$playlists->playlist_name}}</h5>
                    <a  href="{{route('playlist.auto',$playlists->id)}}" class="btn musica-btn mt-3"><i class="fa fa-play" aria-hidden="true"></i> Play all songs</a>
                </div>

                <div class="col-md-9">

                    @foreach($playlist as $key => $song)
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>{{++$key}}<span></span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="{{asset('storage/'.$song->image)}}" alt="">
                                </div>
                                <div class="shows-name">
                                    <a href="{{route('home2.show', $song->song_id)}}"><h6>{{$song->song_name}}</h6></a>
                                    <a href="{{route('home2.song-singer', $song->singer_id)}}"><p>{{$song->singer_name}}</p></a>

                                </div>
                            </div>
                            <div class="poca-music-player">
                                <audio controls>
                                    <source src="{{asset('storage/'.$song->audio)}}">
                                </audio>
                            </div>
{{--                            <div class="music-play-icon playlist_delete">--}}
{{--                                --}}

{{--                            </div>--}}
                            <a href="{{route('playlists.deleteSong',[$song->playlist_id, $song->song_id])}}" onclick="return confirm('Are you sure?')" class="btn text-light"><i class="fa fa-times" aria-hidden="true"></i></a>
                        </div>
                    @endforeach
                </div>
                    <h1 class="text-light">Song Suggest</h1>
                            <div class="row">
                                @foreach($songs2 as $key => $song1)
                                    <div class="col-md-6">
                                        <div class="single-upcoming-shows  d-flex align-items-center flex-wrap">
                                            <div class="shows-date col-md-3">
                                                <h2>{{++$key}}<span></span></h2>
                                            </div>
                                            <div class="shows-desc d-flex align-items-center col-md-6 box-content">
                                                <div class="shows-img">
                                                    <img src="{{asset('storage/'.$song1->image)}}" alt="">
                                                </div>
                                                <div class="shows-name">
                                                    <h6>{{$song1->song_name}}</h6>
                                                    <p>{{$song1->singer->singer_name}}</p>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <a href="{{route('playlists.addSong',[$playlists->id, $song1->id])}}" class="btn text-light"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>



                </div>
            </div>

    </div>
    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2" style="background-image: url(/Client/img/bg-img/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <div class="cta-text">
                            <span>Unique Way to see a</span>
                            <h2>List Musics</h2>
                            <h4>Search for the best music</h4>
                        </div>
                        <div class="cta-btn mt-30">
                            <a href="{{route('home2.song')}}" class="btn musica-btn">Musics</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="/Client/img/core-img/logo2.png" alt=""></a>
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">The team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Subscribe</h4>
                        </div>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div class="form-popup" id="myForm">

    </div>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
@endsection
