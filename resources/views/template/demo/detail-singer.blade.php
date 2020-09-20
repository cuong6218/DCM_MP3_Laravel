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
        <h2>{{$lists[0]->singer_name}}</h2>
    </div>
</div>
<!-- bg gradients -->
<div class="bg-gradients"></div>
<!-- ##### Breadcumb Area End ##### -->

<div class="featured-album-area section-padding-100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-album-content d-flex flex-wrap">

                    <!-- Album Thumbnail -->
                    <div class="album-thumbnail h-100 bg-img"
                         {{--                             style="background-image: url(/Client/img/bg-img/bg-4.jpg);"></div>--}}
                    style="background-image: url({{asset('storage/'.$lists[0]->image)}});"></div>

                <!-- Album Songs -->
                <div class="album-songs h-100">

                    <!-- Album Info -->
                    <div class="album-info mb-50 d-flex flex-wrap align-items-center justify-content-between">
                        <div class="album-title">
                            <h6>Featured album</h6>
                            <h4>{{$lists[0]->singer_name}}</h4>
                        </div>
                        <div class="album-buy-now">
                            <a href="{{route('home2.index')}}" class="btn musica-btn">Home Page</a>
                        </div>
                    </div>

                    <div class="album-all-songs">

                        <!-- Music Playlist -->
                        <div class="music-playlist">
                            <!-- Single Song -->
                            @foreach($lists as $list)
                            <div class="single-music active">
                                <a href="{{route('home2.show',$list->id)}}"><h6>{{$list->song_name}}</h6></a>
                                <audio  controls>
                                    <source src="{{asset('storage/'.$list->audio)}}">
                                </audio>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Now Playing -->
                    <div class="now-playing d-flex flex-wrap align-items-center justify-content-between">
                        <div class="songs-name">
                            <p>Playing</p>
                            <h6>{{$lists[0]->song_name}}</h6>
                        </div>
                        <audio preload="auto" controls>
                            <source src="{{asset('storage/'.$lists[0]->audio)}}">
                        </audio>
                    </div>

                </div>
            </div>
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
                        <h2>Music Concert</h2>
                        <h4>Search for the best music</h4>
                    </div>
                    <div class="cta-btn mt-30">
                        <a href="#" class="btn musica-btn">elements</a>
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
@endsection
