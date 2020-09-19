<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Musica - Music Template</title>

    <!-- Favicon -->
    <link rel="icon" href="/Client/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/Client/style.css">


    <style>
        #text-name {
            color: white;

        }
        .musica-music-artists-area .music-search {
            margin-top: 6px;
        }
        .single-music-player{
            margin-top: 20px;
        }
        .owl-carousel .owl-item img{
            width: 100% !important;
        }
        single-music-player{
            width: 100% !important;
        }

    </style>
</head>

<body>
<!-- ##### Preloader ##### -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="circle-preloader">
        <img src="/Client/img/core-img/compact-disc.png" alt="">
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="musica-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="musicaNav">

                    <!-- Nav brand -->
                    <a href="{{route('home2.index')}}" class="nav-brand"><img src="/Client/img/core-img/logo.png"
                                                                              alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('home2.index')}}">Home Page</a></li>
                                <li><a href="{{route('home2.albums')}}">List Albums</a></li>
                                <li><a href="{{route('home2.singer')}}">List Singer</a></li>
                                <li><a href="{{route('home2.song')}}">List Songs</a></li>
                            </ul>

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('content')


<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="/Client/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/Client/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/Client/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="/Client/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="/Client/js/active.js"></script>
</body>

</html>
