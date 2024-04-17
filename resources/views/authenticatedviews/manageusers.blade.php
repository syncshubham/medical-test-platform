@extends('authenticatedviews.layout')
@section('content')
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">List of Users</h3>
{{-- <ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
<li class="breadcrumb-item active">Mentee</li>
</ul> --}}
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="datatable table table-hover table-center mb-0">
<thead>
<tr>
<th>User ID</th>
<th>User Name</th>
<th>Email</th>
<th>Role</th>
<th class="text-center">Account Status</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
    @foreach ($users as $user )
    <tr>
        <td>
            <h2>{{$user->id}}</h2>
        </td>
        <td>
        <h2 class="table-avatar">
        <a href="profile.html">{{$user->name}} </a>
        </h2>
        </td>
        <td>{{$user->email}}</td>
        <td>@foreach ($user->getRoleNames() as $rolename)
            {{$rolename}}
        @endforeach</td>
        <td>
        <div class="status-toggle d-flex justify-content-center">
        <input type="checkbox" id="status_{{$user->id}}" class="check" checked>
        <label for="status_{{$user->id}}" class="checktoggle">checkbox</label>
        </div>
        </td>
        <td>
        <div class="status-toggle d-flex justify-content-center">
            <a title="Edit User details" style="background-color:#745874;border:1px solid #631D63; " href="{{url('user/edit', ['id' => $user->id])}}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a>
        </div>
        </td>
   
        </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection