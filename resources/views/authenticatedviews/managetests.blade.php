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
<table class="tempdatatable table table-hover table-center mb-0">
<thead>
<tr>
<th>S.no</th>
<th>Test Name</th>
<th>Parameters</th>
</tr>
</thead>
<tbody>

    <tr>


        </tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




<script>
    $(document).ready(function() {
        $('.tempdatatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('manage.tests') }}',
            columns: [
                {data:'DT_RowIndex', name:'DT_RowIndex'},
        {data:'name', name:'name'},
        {data:'parameters', name:'parameters'},
            ]
        });
    });
</script>

<!-- Include SweetAlert2 script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- JavaScript code to attach event listeners -->
<script>
    $(document).ready(function() {
        // Event listener for form submission
        $(document).on('click', '.deletetest', function (event) {
            event.preventDefault();
            var form = $(this);

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
                    form.submit();
                }
            });
        });
    });
</script>




@endsection