<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/intestlogo.png')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">

        <header style="height: 5rem;" class="header">
        <div class="header-fixed">
        <nav style="height:5rem;" class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
        <a id="mobile_btn" href="javascript:void(0);">
        <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
        </span>
        </a>
        <a href="index.html" class="navbar-brand logo">
        <img src="{{ asset('assets/img/logo/intestlogo.png')}}" style="min-height:4rem;max-height:4rem;" class="img-fluid" alt="Logo">
        </a>
        </div>
        <div class="main-menu-wrapper">
        <div class="menu-header">
        <a href="index.html" class="menu-logo">
        <img src="{{ asset('assets/img/logo/intestlogo.png')}}" style="min-height:4.6rem;max-height:4.6rem;" class="img-fluid" alt="Logo">
        </a>
        <a id="menu_close" class="menu-close" href="javascript:void(0);">
        <i class="fas fa-times"></i>
        </a>
        </div>
        <ul class="main-nav">
        {{-- <li class="active has-submenu">
        <a href="index.html">Home <i class="fas fa-chevron-down"></i></a>
        <ul class="submenu">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="index-two.html">Home 2</a></li>
        <li><a href="index-three.html">Home 3</a></li>
        <li><a href="index-four.html">Home 4</a></li>
        <li><a href="index-five.html">Home 5</a></li>
        <li><a href="index-six.html">Home 6</a></li>
        <li><a href="index-seven.html">Home 7</a></li>
        </ul>
        </li>
        <li class="has-submenu">
        <a href>Mentor <i class="fas fa-chevron-down"></i></a>
        <ul class="submenu">
        <li><a href="dashboard.html">Mentor Dashboard</a></li>
        <li><a href="bookings.html">Bookings</a></li>
        <li><a href="schedule-timings.html">Schedule Timing</a></li>
        <li><a href="mentee-list.html">Mentee List</a></li>
        <li><a href="profile-mentee.html">Mentee Profile</a></li>
        <li class="has-submenu">
        <a href="blog.html">Blog</a>
        <ul class="submenu">
        <li><a href="blog.html">Blog</a></li>
        <li><a href="blog-details.html">Blog View</a></li>
        <li><a href="add-blog.html">Add Blog</a></li>
        <li><a href="edit-blog.html">Edit Blog</a></li>
        </ul>
        </li>
        <li><a href="chat.html">Chat</a></li>
        <li><a href="invoices.html">Invoices</a></li>
        <li><a href="profile-settings.html">Profile Settings</a></li>
        <li><a href="reviews.html">Reviews</a></li>
        <li><a href="mentor-register.html">Mentor Register</a></li>
        </ul>
        </li>
        <li class="has-submenu">
        <a href>Mentee <i class="fas fa-chevron-down"></i></a>
        <ul class="submenu">
        <li class="has-submenu">
        <a href="#">Mentors</a>
        <ul class="submenu">
        <li><a href="map-grid.html">Map Grid</a></li>
        <li><a href="map-list.html">Map List</a></li>
        </ul>
        </li>
        <li><a  >Search Mentor</a></li>
        <li><a href="profile.html">Mentor Profile</a></li>
        <li><a href="bookings-mentee.html">Bookings</a></li>
        <li><a href="checkout.html">Checkout</a></li>
        <li><a href="booking-success.html">Booking Success</a></li>
        <li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
        <li><a href="favourites.html">Favourites</a></li>
        <li><a href="chat-mentee.html">Chat</a></li>
        <li><a href="profile-settings-mentee.html">Profile Settings</a></li>
        <li><a href="change-password.html">Change Password</a></li>
        </ul>
        </li>
        <li class="has-submenu">
        <a href>Pages <i class="fas fa-chevron-down"></i></a>
        <ul class="submenu">
        <li><a href="voice-call.html">Voice Call</a></li>
        <li><a href="video-call.html">Video Call</a></li>
        <li><a  >Search Mentors</a></li>
        <li><a href="components.html">Components</a></li>
        <li class="has-submenu">
        <a href="invoices.html">Invoices</a>
        <ul class="submenu">
        <li><a href="invoices.html">Invoices</a></li>
        <li><a href="invoice-view.html">Invoice View</a></li>
        </ul>
        </li>
        <li><a href="blank-page.html">Starter Page</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="forgot-password.html">Forgot Password</a></li>
        </ul>
        </li>
        <li class="has-submenu">
        <a href>Blog <i class="fas fa-chevron-down"></i></a>
        <ul class="submenu">
        <li><a href="blog-list.html">Blog List</a></li>
        <li><a href="blog-grid.html">Blog Grid</a></li>
        <li><a href="blog-details.html">Blog Details</a></li>
        </ul>
        </li> --}}
        <li class="active">
        <a style="font-weight: bold" href="/" target="">Home</a>
        </li>

        <li class="">
            <a href="{{ route('aboutus') }}">About us</a>
            </li>
        <li>
            <a href="" target="_blank">FAQ</a>
        </li>
        <li>
            <a href="{{ route('contactus') }}">Contact</a>
        </li>
        <li class="login-link">
        <a href="{{ route('login') }}">Sign In</a>
        </li>
        </ul>
        </div>
        <ul class="nav header-navbar-rht">
        <li class="nav-item">
        <a class="nav-link header-login" href="{{ route('login') }}">Sign In</a>
        </li>
        </ul>
        </nav>
        </div>
        </header>
        
        @yield('content')


<footer class="footer">

<div class="footer-top aos" data-aos="fade-up">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-about">
<div class="footer-logo">
<img src="{{ asset('assets/img/logo/intestlogo.png')}}" style="min-height:7rem !important;" alt="logo">
</div>
<div class="footer-about-content">
<p>Inspiring Confidence, Delivering Results: Experience the Difference with Our Diagnostic Test Platform.</p>
<div class="social-icon">
<ul>
<li>
<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
</li>
<li>
<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
</li>
<li>
<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
</li>
<li>
<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
</li>

</ul>
</div>
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">Quick Links</h2>
<ul>
    <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
    <li><a href="{{ route('terms_conditions') }}">Terms and conditions</a></li>
    <li><a href="{{ route('refund_policy') }}">Cancellation and refund Policy</a></li>
    <li><a href="{{ route('password.request') }}">Forget password</a></li>

    
</ul>
</div>

</div>

<div class="col-lg-3 col-md-6 col-6">

    <div class="footer-widget footer-contact">
    <h2 class="footer-title">Contact Us</h2>
    <div class="footer-contact-info">
    <div class="footer-address">
    <span><i class="fas fa-map-marker-alt"></i></span>
    <p> Muzzafarnagar<br> Uttar pradesh, 251001</p>
    </div>
    <p>
    <i class="fas fa-phone-alt"></i>
    +91 96275 19101
    </p>
    <p class="mb-0">
    <i class="fas fa-envelope"></i>
    <a> Admin@intestbazar.com</a>
    </p>
    </div>
    </div>
    
    </div>

<div class="col-lg-3 col-md-6">

<div class="footer-widget footer-menu">
<h2 class="footer-title">Location</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55574.5819843034!2d77.66765773409584!3d29.47519407864267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c1ba00983523d%3A0xc6a75ba008574871!2sMuzaffarnagar%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1708757666401!5m2!1sen!2sin" style="height:100%;width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

</div>

</div>
</div>
</div>


<div class="footer-bottom">
<div class="container-fluid">

<div class="copyright">
<div class="row">
<div class="col-12 text-center">
<div class="copyright-text">
<p class="mb-0">&copy; 2024 <a style="font-weight: bold;color:var(--light-color);">Intest Bazar</a>, All rights reserved. Developed and maintained by <a style="font-weight:bold;color:var(--light-color);" href="https://webcrowdsolutions.com/" target="_blank">Webcrowd solutions pvt. ltd.</a></p>
</div>
</div>
</div>
</div>

</div>
</div>

</footer>

</div>


    <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}" type="7381bdf00e99662d5bde1e59-text/javascript"></script>


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" type="7381bdf00e99662d5bde1e59-text/javascript"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}" type="7381bdf00e99662d5bde1e59-text/javascript"></script>
    <script src="{{ asset('assets/plugins/aos/aos.js')}}" type="7381bdf00e99662d5bde1e59-text/javascript"></script>
    <script src="{{ asset('assets/js/script.js')}}" type="7381bdf00e99662d5bde1e59-text/javascript"></script>


    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('assets/js/map.js')}}"></script>
    <script src="{{ asset('assets/js/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.js')}}"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>

    <script src="{{ asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="7381bdf00e99662d5bde1e59-|49" defer></script>
</body>
</html>