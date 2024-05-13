@extends('authenticatedviews.layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Register User</h3>
    </div>
    </div>
    </div>
    <style>
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4d2c70c9;
            padding: 20px;
            font-size:;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 0.5s ease-in-out forwards;
            z-index: 99999;
            color: whitesmoke;

        }
    
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    
        @keyframes slideOut {
            0% {
                opacity: 1;
                transform: translateY(0);
            }
            100% {
                opacity: 0;
                transform: translateY(-20px);
            }
        }
    </style>
    
    <div class="row">
    <div class="col-lg-12">
    <div class="card">
        @if (session('Success'))
    <div class="notification" id="notification">
        {{ session('Success') }}
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const notification = document.getElementById('notification');
        
        if (notification) {
            // Function to hide the notification after 5 seconds
            const hideNotification = () => {
                notification.style.animation = 'slideOut 0.5s ease-in-out forwards';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 500); // Hide after animation completes
            };

            // Automatically hide the notification after 5 seconds
            setTimeout(hideNotification, 5000);
        }
    });
</script>

    <div class="card-body">
    <form method="post" action="{{ route('create.user') }}" enctype="multipart/form-data">
        @csrf
        <x-validation-errors style="border: 1.37px solid #b10f0f;
        border-radius: 17px;
        padding: 14px;
        margin-bottom: 0px !important;
        background-color: #ffd9d9;" class="mb-4" />
        <br>
        <div class="form-group row">
            <label class="col-form-label col-md-2">User Name</label>
            <div class="col-md-10">
                <input type="text" name="name" value="{{old('name')}}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2">Email</label>
            <div class="col-md-10">
                <input type="email" name="email" value="{{old("email")}}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2">Role</label>
            <div class="col-md-10">
            <select name="roles" class="form-control" required>
                <option value="">Select Role</option>
                @foreach ( $roles as $role )
                    <option value="{{$role}}" {{ old('roles') == $role ? 'selected' : '' }}>{{$role}}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="form-group row">
            <p class="text-danger">( Profile photo should be JPG/JPEG/PNG format only withing size limit of 100kb only )</p>
            <label class="col-form-label col-md-2">Profile Photo</label>
            <div class="col-md-10">
                <input type="file" name="profile_photo_path" value="" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2">Password</label>
            <div class="col-md-10">
                <input type="password" name="password" class="form-control" required>
            </div>
        </div> 
        <div class="form-group row">
            <label class="col-form-label col-md-2">Password Confirmation</label>
            <div class="col-md-10">
              <input type="password" name="password_confirmation" class="form-control" required>
            </div>
        </div> 
    <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection