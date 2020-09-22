    @extends('template.demo.master.menu')
@section('content')

    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(/Client/img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Musica <span>Musica</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Music Theme</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Musica</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(/Client/img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Colorlib <span>Colorlib</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Music Template</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Colorlib</h2>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(/Client/img/bg-img/bg-3.jpg);"></div>
                <!-- Slide Content -->
                <div class="hero-slides-content text-center">
                    <h2 data-animation="fadeInUp" data-delay="100ms">Festival <span>Festival</span></h2>
                    <p data-animation="fadeInUp" data-delay="300ms">Free Themes</p>
                </div>
                <!-- Big Text -->
                <h2 class="big-text">Festival</h2>
            </div>

        </div>
        <!-- bg gradients -->
        <div class="bg-gradients"></div>


    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <div class="about-us-area section-padding-100-0 bg-img bg-overlay"
         style="background-image: url(/Client/img/bg-img/bg-4.jpg);" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Artist Bio</h2>
                        <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-thumbnail mb-100">
                        <img src="/Client/img/bg-img/bg-5.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-lg-6">
                    <div class="about-content mb-100">
                        <h4>Hello, It’s Michael Smithson</h4>
                        <p>Nulla pretium tincidunt felis, nec sollicitudin mauris lobortis in. Aliquam eu feugiat
                            ligula, laoreet efficitur nulla. Morbi nec neque porta, elementum massa at, vehicula nunc.
                            Nulla facilisi. Donec id purus eu lectus imperdiet varius. Curabitur consectetur nunc sem,
                            vitae cursus enim tempor eget. Praesent pellentesque nisi urna, sit amet suscipit ligula
                            posuere id. Aenean id tortor vel quam ornare gravida. Phasellus luctus feugiat nunc, quis
                            vulputate ipsum convallis quis. Integer vel nulla erat. Donec erat metus, luctus quis
                            maximus quis, volutpat eu tellus. Interdum et malesuada fames ac ante ipsum primis in
                            faucibus.</p>
                        <img src="/Client/img/core-img/signature.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Upcoming Shows Area Start ##### -->
    <div class="upcoming-shows-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>New Albums</h2>
                        <a href="{{route('home2.albums')}}"><h6>Show List Albums</h6></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Upcoming Shows Content -->

                    <div class="upcoming-shows-content">
                    @foreach($albums as $key=>$album)
                        <!-- Single Upcoming Shows -->
                        <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                            <div class="shows-date">
                                <h2>{{++$key}}<span></span></h2>
                            </div>
                            <div class="shows-desc d-flex align-items-center">
                                <div class="shows-img">
                                    <img src="{{asset('storage/'.$album->image)}}" alt="">
                                </div>
                                <div class="shows-name">
                                    <h6>{{$album->album_name}}</h6>
                                    <p>Cluj, Romania</p>
                                </div>
                            </div>
                            <div class="shows-location">
                                <p>At the Castle</p>
                            </div>
                            <div class="shows-time">
                                <p>{{$album->created_at}}</p>
                            </div>
                            <div class="buy-tickets">
                                <a href="{{route('home2.show-album',$album->id)}}" class="btn musica-btn">Show Albums</a>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Player Area Start ##### -->
    <div class="music-player-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2 style="color: black">New Musics</h2>
                            <h6>Sed porta cursus enim, vitae maximus felis luctus iaculis.</h6>
                        </div>
                    </div>
{{--                    <div class="music-player-slides owl-carousel">--}}
{{--                    @foreach($songs as $song)--}}
{{--                        <!-- Single Music Player -->--}}
{{--                            <div class="single-music-player">--}}
{{--                                <img style="width: 350px; height: 350px" src="{{asset('storage/'.$song->image)}}" alt="">--}}

{{--                                <div class="music-info d-flex justify-content-between">--}}
{{--                                    <div class="music-text">--}}

{{--                                        <a href="{{route('home2.show',$song->id)}}"><h5>{{$song->song_name}}</h5></a>--}}
{{--                                        <p>{{$song->author}}</p>--}}
{{--                                        <a style="color: white"><i class="fa fa-eye" aria-hidden="true"> {{$song->views}}</i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="music-play-icon">--}}
{{--                                        <audio  controls>--}}
{{--                                            <source src="{{asset('storage/'.$song->audio)}}">--}}
{{--                                        </audio>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <hr>--}}
                    <div class="music-player-slides owl-carousel">
                    @foreach($customerMusic as $customer)
                        <!-- Single Music Player -->
                            <div class="single-music-player">
                                <img style="width: 350px; height: 350px" src="{{asset('storage/'.$customer->image)}}" alt="">

                                <div class="music-info d-flex justify-content-between">
                                    <div class="music-text">
                                        <a href="{{route('home2.show',$customer->id)}}"><h5>{{$customer->music_name}}</h5></a>
                                        @foreach($singerAll as $singer)

                                        <p > @if($singer->id == $customer->singer)
                                                {{$singer->singer_name}}</p>
                                            @endif
                                        @endforeach
                                        <a style="color: white"><i class="fa fa-eye" aria-hidden="true"> {{$customer->views}}</i></a>
                                    </div>
                                    <div class="music-play-icon">
                                        <audio class="" controls>
                                            <source src="{{asset('storage/'.$customer->audio)}}">
                                        </audio>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Music Player Area End ##### -->

    <!-- ##### Featured Album Area Start ##### -->
    <div class="featured-album-area section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-album-content d-flex flex-wrap">

                        <!-- Album Thumbnail -->
                        <div class="album-thumbnail h-100 bg-img"
                             style="background-image: url(/Client/img/bg-img/bg-4.jpg);"></div>

                        <!-- Album Songs -->
                        <div class="album-songs h-100">

                            <!-- Album Info -->
                            <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                                <div class="album-title">
                                    <h6>Featured album</h6>
                                    <h4>List Top View</h4>
                                </div>
                                <div class="album-buy-now">
                                    <a href="{{route('home2.albums')}}" class="btn musica-btn">List Hot Albums</a>
                                </div>
                            </div>

                            <div class="album-all-songs">
                                <!-- Music Playlist -->
                                <div class="music-playlist">
                                    @foreach($listSongs as $list)
                                    <!-- Single Song -->
                                    <div class="single-music active ">

                                        <a href="{{route('home2.show',$list->id)}}">
                                        <h6>{{$list->song_name}}</h6>
                                        </a>
                                        <audio controls preload="auto">
                                            <source src="{{asset('storage/'.$list->audio)}}" >
                                        </audio>
                                    </div>
                                        <a style="color: white"><i class="fa fa-eye" aria-hidden="true"> {{$list->views}}</i></a>
                                        <a style="color: white" href="{{asset('storage/'.$list->audio)}}" download><i class="fa fa-download" aria-hidden="true"></i></a>
                                        @endforeach
                                </div>
                            </div>
                            <!-- Now Playing -->
                            <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                                <div class="songs-name">
                                    <p>Hot Musics</p>
                                    <h6>{{$listSongs[0]->song_name}}</h6>
                                </div>
                                <audio preload="auto" controls >
                                    <source src="{{asset('storage/'.$listSongs[0]->audio)}}">
                                </audio>
{{--                                <audio class="my_audio" controls autoplay></audio>--}}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->
    <div  class="musica-music-artists-area d-flex flex-wrap clearfix">
        <!-- Music Search -->
        @foreach($singers as $singer)
            <div class="music-search bg-img bg-overlay2 wow fadeInUp" data-wow-delay="300ms"
                 style="background-image: url({{asset('storage/'.$singer->image)}});">
                <!-- Content -->
                <div class="music-search-content">
                    <a href="{{route('home2.song-singer',$singer->id)}}"><h2>{{$singer->singer_name}}</h2></a>
{{--                    <h6 style="color: white">{{$singer->description}}</h6>--}}
                </div>
            </div>
            <br>
        @endforeach
    </div>
    <!-- ##### Music Artists Area End ##### -->

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
                                                                                    aria-hidden="true"></i> by <a
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

