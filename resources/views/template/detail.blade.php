<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
    <title>Musica - Music Template</title>
    <base href="{{asset('')}}">
  <!-- Favicon -->
  <link rel="icon" href="/Client/img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

    <style>
        .poca-btn.active{
            background: linear-gradient(to right, #cc1573, #5722a9);
        }
        .poca-btn.btn-2{
            background: linear-gradient(to right, #cc1573, #5722a9);
            color: white;
            border: solid #e85153;
        }
        .audioplayer:not(.audioplayer-playing) .audioplayer-playpause{
            background: linear-gradient(to right, #cc1573, #5722a9);
        }
        .audioplayer .audioplayer-volume-adjust div div{
            background: linear-gradient(to right, #cc1573, #5722a9);
        }
        .poca-music-area .poca-music-content .music-published-date{
            color: #5722a9;
        }

    </style>
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-thumbnail">
      <img src="/Client/img/core-img/compact-disc.png" alt="">
    </div>
  </div>


  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->


      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">{{$shows[0]->singer_name}}</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">{{$shows[0]->description}}</h5>
                <div class="welcome-btn-group">
                  <a href="{{route('home2.index')}}" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Home Page</a>
                  <a href="{{route('home2.albums')}}" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">List Albums</a>
                </div>
              </div>
              <!-- Welcome Music Area -->
              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img style="width: 260px; height: 260px" src="{{asset('storage/'.$shows[0]->image)}}" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">{{$shows[0]->created_at}}</span>
                  <h2>{{$shows[0]->album_name}} - {{$shows[0]->singer_name}}</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">{{$shows[0]->author}}</a> | <a href="#" class="music-catagory">Tutorials</a></p>
                  </div>
                  <!-- Music Player -->
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="{{asset('storage/'.$shows[0]->audio)}}">
                    </audio>
                  </div>
                  <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i>View ({{$shows[0]->views}})</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


  </section>
  <!-- ***** Welcome Area End ***** -->


  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/poca.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>

</body>

</html>
