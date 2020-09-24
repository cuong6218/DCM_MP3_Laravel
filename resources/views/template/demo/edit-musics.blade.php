@extends('template.demo.master.menu')
@section('content')
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="/Client/img/core-img/compact-disc.png" alt="">
        </div>
    </div>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(/Client/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Edit Song</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### Header Area Start ##### -->
    <br><br><br><br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">

                <table class="table">
                    <thead class="table-info">
                    <tr>
                        <th scope="col"><a href="{{route('profile.users',\Illuminate\Support\Facades\Auth::user()->id)}}">Profile</a></th>
                    </tr>
                    </thead>
                    <thead class="table-info">
                    <tr>
                        <th scope="col"><a href="{{route('profile.upload')}}">Upload Musics</a></th>
                    </tr>
                    </thead>

                    <thead class="table-info">
                    <tr>
                        <th scope="col"><a href="{{route('profile.pending',\Illuminate\Support\Facades\Auth::user()->id)}}">List Musics</a></th>
                    </tr>
                    </thead>
                </table>
            </div>


            <div class="col-sm-9">
                <form method="post" enctype="multipart/form-data" action="{{route('profile.musics.update',$music->id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Songs name:</label>
                        <input value="{{$music->music_name}}" name="music_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if($errors->has('music_name'))
                            <p class="text-danger">{{$errors->first('music_name')}}</p>
                        @endif
                    </div>

                    <img src="{{asset('storage/'.$music->image)}}" style="width: 100px; height: 100px">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Songs Image: </label>
                        <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                        @if($errors->has('image'))
                            <p class="text-danger">{{$errors->first('image')}}</p>
                        @endif
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlFile1">Songs Audio: </label>--}}
{{--                        <input name="audio" type="file" class="form-control-file" id="exampleFormControlFile1">--}}
{{--                        @if($errors->has('audio'))--}}
{{--                            <p class="text-danger">{{$errors->first('audio')}}</p>--}}
{{--                        @endif--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Songs Singer:</label>
                        <select name="singer" class="form-control" id="exampleFormControlSelect1">
                            @foreach($singers as $singer)
                                <option @if($singer->id == $music->singer) selected @endif value="{{$singer->id}}">{{$singer->singer_name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('singer'))
                            <p class="text-danger">{{$errors->first('singer')}}</p>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$music->desc}}</textarea>
                        @if($errors->has('desc'))
                            <p class="text-danger">{{$errors->first('desc')}}</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-info">Upload Songs</button>
                    <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>







    <!-- ##### CTA Area Start ##### -->
    <div class="musica-cta-area section-padding-100 bg-img bg-overlay2"
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
