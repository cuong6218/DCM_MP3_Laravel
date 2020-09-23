<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>Register - Music Template</title>

    <!-- Custom fonts for this template-->
    <link href="/Login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Login/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        a.btn.btn-primary.btn-user.btn-block {
            color: white;
        }
    </style>
</head>

<body class="bg-gradient-primary">
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
            <h2>Register</h2>
        </div>
    </div>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <div class="alert-success" id="message-register"></div>
                            <form class="user" method="post" action="{{route('users.register.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input name="name" type="text" class="form-control form-control-user"
                                               id="name" placeholder="User Name" value="{{old('name')}}">
                                        @if($errors->has('name'))
                                            <p class="text-dark">{{$errors->first('name')}}</p>
                                        @endif
                                        <p id="error-name" class="text-danger"></p>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user"
                                           id="email" placeholder="Email Address" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    @endif
                                    <p id="error-email" class="text-danger"></p>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password1" type="password" class="form-control form-control-user"
                                               id="password1" placeholder="Password">
                                        @if($errors->has('password'))
                                            <p class="text-dark">{{$errors->first('password')}}</p>
                                        @endif
                                        <p id="error-password1" class="text-danger"></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="password1_confirmation" type="password"
                                               class="form-control form-control-user" id="password2"
                                               placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button id="btn-create-register" type="button"
                                        class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="redirect/google" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--<script src="/Login/vendor/jquery/jquery.min.js"></script>--}}
<script src="/Login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/Login/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/Login/js/sb-admin-2.min.js"></script>
<script>
    $(document).ready(function () {

        let origin = location.origin;
        $('#btn-create-register').click(function () {

            let name = $('#name').val();
            let email = $('#email').val();
            let password = $('#password1').val();
            let password1_confirmation = $('#password2').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let formData = new FormData();
            formData.append('name', name)
            formData.append('email', email)
            formData.append('password1', password)
            formData.append('password1_confirmation', password1_confirmation)

            $.ajax({
                url: origin + '/users/register',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                success: function (res) {
                    console.log(res)
                    let html = '<h3>Register success!</h3>'
                    $('#message-register').html(html);
                    $('#name').val('');
                    $('#email').val('');
                    $('#password1').val('');
                    $('#password2').val('');
                },
                error: function (xhr, status, error) {
                    $.each(xhr.responseJSON.errors, function (key, item) {
                        $("#error-" + key).html(item)
                        $('input[name="' + key + '"]')
                    });
                }
            })

        })

    })

</script>
</body>

</html>
