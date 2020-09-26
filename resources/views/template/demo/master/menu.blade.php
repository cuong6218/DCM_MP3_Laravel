<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    @toastr_css
    <!-- Title -->
    <title>Musica - Music Template</title>

    <!-- Favicon -->
    <link rel="icon" href="/Client/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/Client/style.css">

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <script src="https://www.collaboratescience.com/protoplasm/library/main.js"></script>

    <style>
        #text-name {
            color: white;
        }

        .musica-music-artists-area .music-search {
            margin-top: 6px;
        }

        .single-music-player {
            margin-top: 20px;
        }

        .owl-carousel .owl-item img {
            width: 100% !important;
        }

        single-music-player {
            width: 100% !important;
        }

        .header-area .musica-main-menu .top-social-info a {
            border-radius: 20px;
        }

        #navbarDropdown {
            color: #cc1573;
            font-size: 15px;
        }

        .audioplayer {
            margin: 0px;
            height: 5%;
        }

        .fa-download {
            margin-left: 10px;
        }

        .featured-album-content .album-songs .single-music {
            margin-top: 15px;
            margin-bottom: 5px;
        }
        .empty-playlist {
            background-color: red;
            cursor: pointer;
            background: linear-gradient(33deg,#5a1eae -7%,#ce267a 117%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            flex-direction: column;
            height: 100%;
            border-radius: 4px;
            width: 180px;
            min-height: 229px;
        }


        .fa-thumbs-o-up{
         margin-left: 10px;


        .playlist-name{
            position: relative;
            color:red;
            bottom: 5%;
            right: 0;

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
                            @if(\Illuminate\Support\Facades\Auth::check())

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{\Illuminate\Support\Facades\Auth::user()->email}}

                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('profile.list')}}">Personal music</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{route('users.logout.store')}}">Logout</a>
                                    </div>
                                </li>
                            @else
                                <div class="top-social-info">
                                    <div class="row">
                                        <div class="col-md-6 album-buy-now">
                                            <a href="{{route('users.register')}}" class="btn musica-btn">Register</a>
                                        </div>
                                        <div class="col-md-6 album-buy-now">
                                            <a href="{{route('users.login')}}" class="btn musica-btn">Login</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
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
@jquery
@toastr_js
@toastr_render

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/Client/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/Client/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/Client/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="/Client/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="/Client/js/active.js"></script>

<script>
    $(document).ready(function () {
        let origin = location.origin;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteMusic(id) {
            $.ajax({
                url: origin + '/profile/delete/' + id,
                method: 'GET',
                success: function (result) {
                    console.log(result)
                    $('#musics-' + id).remove();
                }
            })
        }

        $('body').on('click', '#delete-music', function () {
            if (confirm('Are you sure?')) {
                let id = $(this).attr('data-id');
                deleteMusic(id)
                alertify.success('Delete Success');
            }
        })




    });

</script>






</body>

</html>
