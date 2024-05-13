@extends('authenticatedviews.layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Modify User Details</h3>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="card">
        @if (session('Success'))
        <div class="notification" id="notification">
            {{ session('Success') }}
        </div>
        @endif
        @if (session('Error'))
            <div class="notification2" id="notification">
                {{ session('Error') }}
            </div>
        @endif
    <div class="card-body">
    <form action="{{route('update.user')}}" method="post" enctype="multipart/form-data">
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
                <input type="text" name="name" value="{{old('name', $user->name)}}" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2">Email</label>
            <div class="col-md-10">
                <input style="cursor: not-allowed;" type="email" value="{{$user->email}}" class="form-control" disabled readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-md-2">Role</label>
            <div class="col-md-10">
            <select name="roles" class="form-control">
                <option value="">Select Role</option>
                @foreach ($roles as $role)
                <option value="{{ $role }}" {{ old('role', $user->hasRole($role) ? $role : '') == $role ? 'selected' : '' }}>
                    {{ $role }}
                </option>
            @endforeach
            
            </select>
        </div>
    </div>
    @if ($user->profile_photo_path)
    <div class="form-group row">
        <p class="text-danger">( Profile photo should be JPG/JPEG/PNG format only withing size limit of 100kb only )</p>
        <label class="col-form-label col-md-2">Profile Photo</label>
        <div class="col-md-7">
            <input type="file" name="profile_photo_path" value="" class="form-control">
        </div>
        <a href="{{asset($user->profile_photo_path)}}" target="_blank" style="display:flex;justify-content:center;align-items:center;background-color: rgb(23, 20, 45);border-radius:5px;border:1px soild rgb(234, 234, 234);color:white;font-weight:bold;" class="col-md-3">
            Current Profile
        </a>
    </div>
    @else
    <div class="form-group row">
        <p class="text-danger">( Profile photo should be JPG/JPEG/PNG format only withing size limit of 100kb only )</p>
        <label class="col-form-label col-md-2">Profile Photo</label>
        <div class="col-md-10">
            <input type="file" name="profile_photo_path" value="" class="form-control">
        </div>
    </div>
    @endif
    <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection