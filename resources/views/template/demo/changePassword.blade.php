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
            <h2>Change Password</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### Header Area Start ##### -->
    <br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

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


            <div class="col-sm-8">
                <div class="card-header">
                    <h4>Change Password</h4>
                </div>
                <br><br>
                <form method="post" action="{{route('profile.password.update')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            Old Password</label>
                        <input name="current-password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if($errors->has('current-password'))
                            <p class="text-danger">{{$errors->first('current-password')}}</p>
                        @endif
                    </div>
                <hr>

                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input name="new-password" type="password" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('new-password'))
                            <p class="text-danger">{{$errors->first('new-password')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input name="new-password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
                        @if($errors->has('new-password_confirmation'))
                            <p class="text-danger">{{$errors->first('new-password_confirmation')}}</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Change Password</button>
                    <button id="back-add" class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>

            </div>
        </div>
    </div>



    <br><br>



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
