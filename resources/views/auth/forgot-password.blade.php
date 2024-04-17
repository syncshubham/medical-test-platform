<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mentoring.dreamstechnologies.com/html/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 09:05:20 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Forget password</title>

<link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/favicon.png">

<link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">

<link rel="stylesheet" href="admin/assets/css/style.css">
</head>
<body>

    <style>
        .authenticationmobilelogo{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    
        @media(min-width:475px)
        {
            .authenticationmobilelogo{
                display: none;
            }
        }
    </style>
<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
    <div class="authenticationmobilelogo">
        <img style="horizontal-align:center;height:6rem;width:10rem;" src="admin/assets/img/logo/intestlogo.png" alt="Logo">
    </div>
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="admin/assets/img/logo/intestlogowhite.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Forget Password</h1>
<p class="account-subtitle">Don't worry</p>
@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
<div class="form-group">
<input class="form-control" placeholder="Enter registered Email" id="email" type="email" name="email" :value="old('email')" autofocus autocomplete="username" required>
</div>
<div class="form-group">
<button class="btn btn-primary btn-block w-100" type="submit">Send password reset link</button>
</div>
<x-validation-errors class="mb-4 text-danger" />
</form>

<div class="text-center dont-have">Reset password done ? <a href="{{ route('login') }}">Login</a></div>
    {{-- <div class="login-or">
        <span class="or-line"></span>
        <span class="span-or">or</span>
        </div>
<div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> --}}
</div>
</div>
</div>
</div>
</div>
</div>


<script src="admin/assets/js/jquery-3.6.0.min.js" type="ab865b49ef18d069b9a4081a-text/javascript"></script>

<script src="admin/assets/js/bootstrap.bundle.min.js" type="ab865b49ef18d069b9a4081a-text/javascript"></script>

<script src="admin/assets/js/feather.min.js" type="ab865b49ef18d069b9a4081a-text/javascript"></script>

<script src="admin/assets/js/script.js" type="ab865b49ef18d069b9a4081a-text/javascript"></script>
<script src="admin/assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="ab865b49ef18d069b9a4081a-|49" defer></script></body>

<!-- Mirrored from mentoring.dreamstechnologies.com/html/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Feb 2024 09:05:20 GMT -->
</html>