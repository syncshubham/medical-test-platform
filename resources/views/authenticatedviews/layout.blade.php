<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/feathericon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/ckeditor.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/morris/morris.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<style>
    @media(min-width:765px)
    {
        .md\:grid-cols-3 {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
}
    }

    .sm\:max-w-2xl {
    margin-top: 5rem;
}

#logout_button{
    border: none;
    background-color: transparent;
    padding: 0px;
    font-size: inherit;
}

#logoutform{
    color: black;
}

#logoutform:hover #logout_button{
    color: white !important;
}



</style>
<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<img src="{{ asset('admin/assets/img/logo.png')}}" alt="Logo">
</a>
<a href="index.html" class="logo logo-small">
<img src="{{ asset('admin/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fe fe-text-align-left"></i>
</a>
{{-- <div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div> --}}

<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-bars"></i>
</a>


<ul class="nav user-menu">

<li class="nav-item dropdown noti-dropdown">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span class="notification-title">Notifications</span>
<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
</div>
<div class="noti-content">
<ul class="notification-list">
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/user/user.jpg')}}">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Jonathan Doe</span> Schedule <span class="noti-title">his appointment</span></p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/user/user1.jpg')}}">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Julie Pennington</span> has booked her appointment to <span class="noti-title">Ruby Perrin</span></p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/user/user2.jpg')}}">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Tyrone Roberts</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="#">
<div class="media d-flex">
<span class="avatar avatar-sm flex-shrink-0">
<img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('admin/assets/img/user/user4.jpg')}}">
</span>
<div class="media-body flex-grow-1">
<p class="noti-details"><span class="noti-title">Patricia Manzi</span> send a message <span class="noti-title"> to his Mentee</span></p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="#">View all Notifications</a>
</div>
</div>
</li>


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><div class="avatar avatar-sm">
    <div class="mt-2" x-show="! photoPreview">
        <img style="height:40px;width:100%;margin-top:-14px !important;border-radius:50%;" src="{{asset(auth()->user()->profile_photo_path)}}" alt="{{ auth()->user()->name }}" class="rounded-full h-20 w-20 object-cover">
    </div>
</div></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
    <div class="mt-2" x-show="! photoPreview">
        <img style="height:40px;width:100%;margin-top:-6px !important;border-radius:50%;" src="{{asset(auth()->user()->profile_photo_path)}}" alt="{{ auth()->user()->name }}" class="rounded-full h-20 w-20 object-cover">  
    </div>
</div>
@if(auth()->check())
<div class="user-text">
<h6>{{ auth()->user()->name }}</h6>
@if(auth()->user()->hasRole('superadmin'))
<p class="text-muted mb-0">Super Admin</p>
@elseif(auth()->user()->hasRole('manager'))
<p class="text-muted mb-0">Manager</p>
@elseif(auth()->user()->hasRole('labs'))
<p class="text-muted mb-0">Diagnostic Lab</p>
@elseif(auth()->user()->hasRole('agent'))
<p class="text-muted mb-0">Agent</p>
@elseif(auth()->user()->hasRole('sampleboy'))
<p class="text-muted mb-0">Collection Boy</p>
@else
<p class="text-muted mb-0">Guest</p>
@endif
</div>
@endif
</div>
<a class="dropdown-item" href={{url('user/profile')}}>My Profile</a>
<form id="logoutform" action="{{route('logout')}}" method="POST" class="dropdown-item">@csrf<button id="logout_button">Logout</button></form>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
    <li class="">
        <a href="{{route('user.dashboard')}}"><span><i style="margin-right:5px;" class="fe fe-document"></i> Dashboard</span></a>
    </li>
    <li class="submenu">
        <a href="#"><span><i style="margin-right:5px;" class="fa-regular fa-user"></i> Users</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="{{route('register.user')}}">Register</a></li>
            <li><a href="{{route('manage.users')}}">Manage</a></li>
        </ul>
    </li>
    <li class="submenu">
        <a href="#"><span><i style="margin-right:5px;" class="fa-solid fa-vials"></i> Tests</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="{{route('create.test')}}">Create</a></li>
            <li><a href="{{route('manage.testsview')}}">Manage</a></li>
        </ul>
    </li>
    <li class="submenu">
        <a href="#"><span><i style="margin-right:8px;" class="fe fe-document"></i>Quotations</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="{{route('assign.test.randomly')}}">Assign</a></li>
            <li><a href="{{route('manage.assigned.random.tests')}}">Manage</a></li>
        </ul>
    </li>

</ul>
</div>
</div>
</div>

@yield('content')


</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js')}}" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="{{ asset('admin/assets/js/feather.min.js')}}" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="{{ asset('admin/assets/js/script.js')}}" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('admin/assets/plugins/raphael/raphael.min.js')}}" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="{{ asset('admin/assets/plugins/morris/morris.min.js')}}" type="738cc95feedbee1c773f2aa8-text/javascript"></script>
<script src="{{ asset('admin/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>
<script src="{{ asset('admin/assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/chart.morris.js')}}" type="738cc95feedbee1c773f2aa8-text/javascript"></script>

<script src="{{ asset('admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/ckeditor.js')}}"></script>
<script src="{{ asset('admin/assets/js/form-validation.js')}}"></script>
<script src="{{ asset('admin/assets/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/mask.js')}}"></script>
<script src="{{ asset('admin/assets/js/moment.min.js')}}"></script>

<script src="{{ asset('admin/assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="738cc95feedbee1c773f2aa8-|49" defer></script>
</body>
</html>