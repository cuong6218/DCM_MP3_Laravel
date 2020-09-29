@extends('template.demo.master.menu')
@section('content')
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
            <h4 style="color: white; text-align: center;margin-top: 15px">Top results '{{$query}}'</h4>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Music Player -->
                <div class="bradcumbContent">
                    <h5 style="color: white"> Songs </h5>
                </div>

                @forelse($songs as $song)
                    <div class="single-music-player col-sm-3">
                        <img style="width: 100%; height: 100%" src="{{asset('storage/'.$song->image)}}" alt="">
                        <div class="music-info d-flex justify-content-between">
                            <div class="music-text">
                                <a href="{{route('home2.show',$song->id)}}"><h5>{{$song->song_name}}</h5></a>
                                <p>{{$song->author}}</p>
                                <a style="color: white"><i class="fa fa-eye"
                                                           aria-hidden="true"> {{$song->views}}</i></a>
                            </div>
                            <div class="music-play-icon">
                                <audio controls>
                                    <source src="{{asset('storage/'.$song->audio)}}">
                                </audio>
                            </div>
                        </div>
                    </div>
                @empty:
                <div class="mt-4">
                    <h5 style="color: white">not found</h5>
                </div>
                @endforelse
                <div class="container">
                    <div class="row mt-4">
                        <!-- Single Music Player -->
                        <div class="bradcumbContent">
                            <h5 style="color: white"> Singers </h5>
                        </div>

                        @forelse($singers as $singer)
                            <div class="col-md-3 mt-5 mb-3">
                                <div class="card" style=" background-color: #231238">
                                    <img class="card-img-top rounded-circle " src="{{asset('storage/'.$singer->image)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <a href="{{route('home2.song-singer',$singer->id)}}"><h5 class="card-title text-center text-light">{{$singer->singer_name}}</h5></a>
                                        <p class="card-text text-center">166K interested</p>
                                    </div>
                                </div>
                            </div>
                        @empty:
                        <div class="mt-4">
                            <h5 style="color: white">not found</h5>
                        </div>
                        @endforelse
                        <div class="container">
                            <div class="row mt-4">
                                <div class="bradcumbContent">
                                    <h5 style="color: white"> Playlists </h5>
                                </div>

                                <!-- Single Music Player -->
                                @forelse($playlists as $playlist)
                                    <div class="single-music-player col-sm-3">
                                        <img style="width: 100%; height: 100%"
                                             src="{{asset('storage/images/playlist-default.jpg')}}" alt="no image">
                                        <div class="music-info d-flex justify-content-between">
                                            <div class="music-text">
                                                <a href="{{route('playlist.show', $playlist->id)}}">
                                                    <h5>{{$playlist->playlist_name}}</h5></a>
                                            </div>
                                            <div class="music-play-icon">
                                                <a class="btn" href="{{route('playlist.destroy', $playlist->id)}}"
                                                   onclick="return confirm('Are you sure?')"><i
                                                        class="fa fa-times text-light" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @empty:
                                    <div class="mt-4">
                                        <h5 style="color: white">not found</h5>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Music Search -->
            </div>
        </div>
            <!-- ##### CTA Area Start ##### -->
            <div class="musica-cta-area section-padding-100 bg-img bg-overlay2 mt-4"
                 style="background-image: url(/Client/img/bg-img/bg-8.jpg);">
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
                                <p class="copywrite-text"><a href="#">
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                            aria-hidden="true"></i> by
                                        <a
                                            href="https://colorlib.com" target="_blank">Colorlib</a>
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
@endsection
