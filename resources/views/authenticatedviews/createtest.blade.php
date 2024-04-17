@extends('authenticatedviews.layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Create Test</h3>
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


    <div class="card-body">
    <form method="post" action="{{ route('store.test') }}" enctype="multipart/form-data">
        @csrf
        <x-validation-errors style="border: 1.37px solid #b10f0f;
        border-radius: 17px;
        padding: 14px;
        margin-bottom: 0px !important;
        background-color: #ffd9d9;" class="mb-4" />
        <br>
        <div class="form-group row">
            <label class="col-form-label col-md-2">Test Name</label>
            <div class="col-md-10">
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
            </div>
             <br>
             <br>
             <label class="col-form-label col-md-2">Total Parameters</label>
            <div class="col-md-10">
                <input type="number" name="parameters" value="{{old('parameters')}}" class="form-control" >
            </div>
            <br>
            <br>
            <label class="col-form-label col-md-2">Test Image</label>
           <div class="col-md-10">
               <input type="file" name="test_image" class="form-control" >
           </div>
        </div>
    <button type="submit" class="btn btn-secondary btn-lg">Create</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection