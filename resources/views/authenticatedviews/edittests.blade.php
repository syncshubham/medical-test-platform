@extends('authenticatedviews.layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Modify Test Data</h3>
    </div>
    </div>
    </div>
    <style>
  
    </style>
    
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
    <form method="post" action="{{ route('update.test') }}" enctype="multipart/form-data">
        @csrf
        <x-validation-errors style="border: 1.37px solid #b10f0f;
        border-radius: 17px;
        padding: 14px;
        margin-bottom: 0px !important;
        background-color: #ffd9d9;" class="mb-4" />
        <br>
        <style>
            .main-form-parent{
                display: flex;
                gap: 20px;
            }

            .test-update-form{
                width: 70%;
            }
            .test-image{
                padding: 5px;
                width: 30%;
            }

            .test-image img{
                width: 80%;
                height: 10rem;
                padding: 5px;
                border: 1px solid gray;
            }
            .test-image .image_Na{
                padding: 5px;
                height: 100%;
                widows: 100%;
                display: flex;
                color: red;
                justify-content: center;
                align-items: center;
                border: 1px solid gray;
            }

            @media(max-width:465px)
            {
            .main-form-parent{
            display: flex;
            flex-direction: column-reverse;
            gap: 20px;
            }

            .test-update-form{
                width: 100%;
            }
            .test-image{
                padding: 5px;
                width: 100%;
            }
            .test-image img{
                height: 10rem !important;
                width: 50%;
                height: 5rem;
                padding: 5px;
                border: 1px solid gray;
            }

            .test-image .image_Na{
                padding: 5px;
                height: 5rem;
                color: red;
                widows: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid gray;
            }
            }
        </style>
        <div class="main-form-parent">
        <div class="form-group test-update-form row">
            <label class="col-form-label col-md-2">Test Name</label>
            <div class="col-md-10">
                <input type="text" name="name" value="{{old('name', $test->name)}}" class="form-control">
            </div>
             <br>
             <br>
             <label class="col-form-label col-md-2">Total Parameters</label>
            <div class="col-md-10">
                <input type="number" name="parameters" value="{{old('parameters', $test->parameters)}}" class="form-control" >
            </div>
            <br>
            <br>
            <label class="col-form-label col-md-2">Test Image</label>
           <div class="col-md-10">
               <input type="file" name="test_image" class="form-control" >
           </div>
        </div>
<div class="test-image"><p style="font-weight: bold;">Current Image</p>
    @if ($test->test_image)
    <img src="{{asset($test->test_image)}}"  alt="">
        @else
        <p class="image_Na">Image not available</p>
    @endif
</div>
    </div>
    <button type="submit" class="btn btn-secondary btn-lg">Modify</button>
    </form>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection