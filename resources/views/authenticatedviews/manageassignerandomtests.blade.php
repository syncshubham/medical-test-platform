@extends('authenticatedviews.layout')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">List of Assigned tests</h3>
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
<div class="table-responsive">
<table class="datatable table table-hover table-center mb-0">
<thead>
<tr>
<th>Test Name</th>
<th>Lab name</th>
<th>Lab rate</th>
<th>Final rate</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
    @foreach ($assignedtests as $assignedtest )
    <tr>
        <td>
            <h2>{{$assignedtest->test->name}}</h2>
        </td>
        <td>
        <h2 class="table-avatar">
       {{$assignedtest->lab->name}} 
        </h2>
        </td>
        <td>
        <h2 class="table-avatar">
        {{$assignedtest->lab_rate}} 
        </h2>
        </td>
        <td>
        <h2 class="table-avatar">
        {{$assignedtest->final_rate}} 
        </h2>
        </td>
        <td style="display: flex;justify-content:center;align-items:center;gap:10px;">
        <div class="status-toggle d-flex justify-content-center">
            <a title="Edit assigned test" style="background-color:#745874;border:1px solid #631D63; " href="{{url('assignedrandomtest/edit', ['id' => $assignedtest->id])}}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a>
        </div>
        <form title="Delete assigned test" method="post" action="{{ route('assignedtest.destroy', $assignedtest->id) }}" class="deletetest d-flex justify-content-center">
            @csrf
            @method('DELETE')
            <button type="submit"><i class="fa-solid fa-trash"></i></button>
        </form>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select all elements with the class '.deletetest'
        const forms = document.querySelectorAll('.deletetest');
    
        // Iterate over each form element
        forms.forEach(function(form) {
            // Add event listener for form submission
            form.addEventListener('submit', function (event) {
                // Prevent the default form submission
                event.preventDefault();
    
                // Display a confirmation dialog using SweetAlert2
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: 'rgb(86 45 16)',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If user confirms deletion, submit the form
                        form.submit();
                    }
                });
            });
        });
    });
    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection