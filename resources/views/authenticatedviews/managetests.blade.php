@extends('authenticatedviews.layout')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">List of Tests</h3>
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
<th>S.no</th>
<th>Test Name</th>
<th>Parameters</th>
<th>Image</th>
<th>Action</th>
</tr>
</thead>
<tbody>
    @php
        $count = 0; 
    @endphp
    @foreach ($tests as $test )
    @php
    $count++; 
    @endphp
    <tr>
        <td>
            <h2>{{$count}}</h2>
        </td>
        <td>
            <h2>{{$test->name}}</h2>
        </td>
        <td>
            <h2>{{$test->parameters}}</h2>
        </td>
        @if ($test->test_image)
        <td style="">
            <img style="width:4rem;height:4rem;box-shadow: 6.6px 13.3px 13.3px hsl(0deg 0% 0% / 0.29);" src="{{asset($test->test_image)}}" alt="{{$test->name}}">
        </td>
        @else
        <td>
            <h2>Image not available</h2>
        </td>     
        @endif
        <td style="display: flex;justify-content:center;align-items:center;gap:10px;">
            <div title="Edit test details" class="status-toggle d-flex justify-content-center">
                <a style="background-color:#745874;border:1px solid #631D63; " href="{{url('test/edit', ['id' => $test->id])}}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a>
            </div>
            <form title="Delete test and related content" method="post" action="{{ route('tests.destroy', $test->id) }}" class="deletetest d-flex justify-content-center">
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
                text: 'You won\'t be able to revert this! and assigned tests related to this test will also be deleted permanently',
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