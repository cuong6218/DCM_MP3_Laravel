<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Poca - Podcast &amp; Audio Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @toastr_css
    <!-- Title -->
    <title>Musica - Music Template</title>
    <base href="{{asset('')}}">
    <!-- Favicon -->
    <link href="/tag/css/select2.css" rel="stylesheet"/>
    <link rel="icon" href="/Client/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <style>
        .poca-btn.active {
            background: linear-gradient(to right, #cc1573, #5722a9);
        }

        .poca-btn.btn-2 {
            background: linear-gradient(to right, #cc1573, #5722a9);
            color: white;
            border: solid #e85153;
        }

        .audioplayer:not(.audioplayer-playing) .audioplayer-playpause {
            background: linear-gradient(to right, #cc1573, #5722a9);
        }

        .audioplayer .audioplayer-volume-adjust div div {
            background: linear-gradient(to right, #cc1573, #5722a9);
        }

        .poca-music-area .poca-music-content .music-published-date {
            color: #5722a9;
        }

        .welcome-welcome-slide {
            min-height: 1150px;
            height: auto;
        }
        .box-comment {
            border-bottom: 1px solid white;
            background-color: #fffffff2;
            padding: 15px;
            border-radius: 20px;
            color: black;
        }
        .box-comment h5{
            color: blue;
        }
        .box-comment p{
            color: black;
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
                        <div class="tags">
                            @foreach($song->tags as $tag)
                                <a href="{{route('tags.index',$tag->id)}}" class="label label-default" style="background-color: black; padding: 5px; color: white; font-weight: bold; margin-left: 2px;">{{$tag->name}}</>
                            @endforeach
                        </div>
                        <h5 data-animation="fadeInUp" data-delay="300ms">{{$shows[0]->description}}</h5>
                        <div class="welcome-btn-group">
                            <a href="{{route('home2.index')}}" class="btn poca-btn m-2 ml-0 active"
                               data-animation="fadeInUp" data-delay="500ms">Home Page</a>
                            <a href="{{route('home2.albums')}}" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp"
                               data-delay="700ms">List Albums</a>
                        </div>
                    </div>
                    <!-- Welcome Music Area -->
                    <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp"
                         data-delay="900ms">
                        <div class="poca-music-thumbnail">
                            <img style="width: 260px; height: 260px" src="{{asset('storage/'.$shows[0]->image)}}"
                                 alt="">
                        </div>
                        <div class="poca-music-content">
                            <span class="music-published-date">{{$shows[0]->created_at}}</span>
                            <h2>{{$shows[0]->album_name}} - {{$shows[0]->singer_name}}</h2>
                            <div class="music-meta-data">
                                <p>By <a href="#" class="music-author">{{$shows[0]->author}}</a> | <a href="#"
                                                                                                      class="music-catagory">Tutorials</a>
                                </p>
                            </div>
                            <!-- Music Player -->
                            <div class="poca-music-player">
                                <audio preload="auto" controls>
                                    <source src="{{asset('storage/'.$shows[0]->audio)}}">
                                </audio>
                            </div>
                            <!-- Likes, Share & Download -->
                            <div class="likes-share-download d-flex align-items-center justify-content-between">
                                <a id="test"><i class="fa fa-headphones" aria-hidden="true"></i> Listen ({{$shows[0]->views}})</a>
                                <div>
                                    <a href="{{route('show.like',$shows[0]->id)}}" class="mr-4"><i
                                            class="fa fa-thumbs-o-up" aria-hidden="true"></i> Like({{$likeCtr}})</a>
                                    <a href="{{route('show.dislike',$shows[0]->id)}}"><i class="fa fa-thumbs-o-down"
                                                                                         aria-hidden="true"></i>
                                        Dislike({{$dislikeCtr}})</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </div>
                @if(\Illuminate\Support\Facades\Auth::check())
                <div class="col-md-12">
                    <br><br>
                    <form method="post" action="{{route('comment.store',$shows[0]->id)}}">
                        @csrf
                        <div class="form-group">
                            <br>
                            <h4 class="text-primary">Comment: </h4>
                            <textarea name="comment" style="background: #6b63b442; color: white" class="form-control"
                                      type="text" rows="4"></textarea>
                            @if($errors->has('comment'))
                                <p class="text-danger">{{$errors->first('comment')}}</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
                @else
                    <div class="col-md-12">
                        <br><br>
                        <form method="post" action="{{route('comment.store',$shows[0]->id)}}">
                            @csrf
                            <div class="form-group">
                                <br>
                                <h4 class="text-primary">Comment: </h4>
                                <textarea name="comment" style="background: #6b63b442; color: white" class="form-control"
                                          type="text" rows="4"></textarea>
                                @if($errors->has('comment'))
                                    <p class="text-danger">{{$errors->first('comment')}}</p>
                                @endif
                            </div>
                            <a href="{{route('users.login')}}" class="btn btn-primary">Post</a>
                        </form>
                    </div>

                @endif


                @if(empty($comments))
                    <div class="box-comment mb-3 mt-3">
                        <h5>Tran Thanh Tung</h5>
                        <p>Nulla pretium tincidunt felis, nec sollicitudin mauris lobortis in. Aliquam eu feugiat
                            ligula, laoreet efficitur nulla. Morbi nec neque porta, elementum massa at, vehicula</p>
                        <span>Date: 29-10-1194</span>

                    </div>
                @else
                    @foreach($comments as $key=>$comment)
                <div class="col-md-12">
                    <div class="box-comment mb-3 mt-3">
                        <h5>{{$comment->name}}</h5>
                        <p>{{$comment->comment}}</p>
                        <span>Date: {{$comment->created_at}}</span>
                    </div>
                </div>
                    @endforeach
                @endif
                {{$comments->links()}}
            </div>
        </div>


    </div>

</section>
@jquery
@toastr_js
@toastr_render
<!-- ***** Welcome Area End ***** -->
<!-- jQuery js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--<script src="js/jquery.min.js"></script>--}}
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- All js -->
<script src="js/poca.bundle.js"></script>
<!-- Active js -->
<script src="js/default-assets/active.js"></script>
<script>
    $(document).ready(function () {
        let origin = location.origin;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("audio").on('playing',function(){
            console.log("Push playing");
            $.ajax({
                url: origin + '/listen/' + {{$shows[0]->id}},
                method: 'POST',
                success: function (result) {
                    console.log(result)
                    {{--let html = '<a><i class="fa fa-headphones" aria-hidden="true"></i> Listen ({{++$shows[0]->views}})</a>';--}}
                    {{--$('#test').html(html);--}}

                }
            })

        });

    });

</script>
<script src="/tag/js/select2.js"></script>
<script src="/tag/js/select2.full.js"></script>
</body>

</html>
