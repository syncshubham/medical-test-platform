@extends('authenticatedviews.layout')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    <div class="page-header">
    <div class="row">
    <div class="col">
    <h3 class="page-title">Edit Randomly Assigned Test</h3>
    </div>
    </div>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-selection--single{
         height: 38px !important;
         display: flex !important;
         align-items: center !important;
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


    <div class="card-body">
    <form method="post" action="{{ route('update.assigned.random.test') }}" enctype="multipart/form-data">
        @csrf
        <x-validation-errors style="border: 1.37px solid #b10f0f;
        border-radius: 17px;
        padding: 14px;
        margin-bottom: 0px !important;
        background-color: #ffd9d9;" class="mb-4" />
        <br>
        <div class="form-group row">
            <label class="col-form-label col-md-2">Select Test</label>
            <div class="col-md-10">
            <select name="test_id" id="mySelect" style="width: 100%;">
                <option value="{{$assignedtest->test_id}}" selected>{{$assignedtest->test->name}}</option>
                <!-- Add more options as needed -->
            </select>
             </div>

             <br>
             <br>
             <label class="col-form-label col-md-2">Select Lab</label>
             <div class="col-md-10">
             <select name="lab_id" id="mySelecttwo" style="width: 100%;">
                <option value="{{$assignedtest->lab_id}}" selected>{{$assignedtest->lab->name}}</option>
                 <!-- Add more options as needed -->
                 {{-- this it the newest function for thenewli created lead of this day, and it will be workk upto dthe date as someone else developer will check this  --}}
             </select>
              </div>
 
              <br>
              <br>
              <label class="col-form-label col-md-2">Lab Rate</label>
              <div class="col-md-10">
                <input type="text" id="lab_rate" name="lab_rate" value="{{ old('lab_rate', $assignedtest->lab_rate) }}" class="form-control">
              </div>

              <br>
              <br>
              <label class="col-form-label col-md-2">Final Rate</label>
              <div class="col-md-10">
                <input type="text" id="final_rate" name="final_rate" value="{{ old('final_rate', $assignedtest->final_rate) }}" class="form-control">
                <div id="commission-message"></div>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    
    <script>
            $(document).ready(function() {
                $('#mySelect').select2({
                    minimumInputLength: 3, // Minimum characters required before making a request
                    ajax: {
                        url: '{{ route('search.tests.data') }}', // Use Laravel route helper to generate URL
                        dataType: 'json',
                        delay: 250, // Delay in milliseconds before making the request
                        data: function (params) {
                            return {
                                search: params.term // Send the search term along with the request
                            };
                        },
                        processResults: function (data) {
                            // Process the fetched data and return it
                            return {
                                results: data
                            };
                        },
                        cache: true // Cache the results for subsequent requests
                    }
                });
            });

            $(document).ready(function() {
                $('#mySelecttwo').select2({
                    minimumInputLength: 3, // Minimum characters required before making a request
                    ajax: {
                        url: '{{ route('search.labs.data') }}', // Use Laravel route helper to generate URL
                        dataType: 'json',
                        delay: 250, // Delay in milliseconds before making the request
                        data: function (params) {
                            return {
                                searchsecond: params.term // Send the search term along with the request
                            };
                        },
                        processResults: function (data) {
                            // Process the fetched data and return it
                            return {
                                results: data
                            };
                        },
                        cache: true // Cache the results for subsequent requests
                    }
                });
            });


// ------displaying the commision rate and other validations between final rate and lab rate
    
     // Get lab rate and final rate input elements
     const labRateInput = document.getElementById('lab_rate');
    const finalRateInput = document.getElementById('final_rate');
    const commissionMessageDiv = document.getElementById('commission-message');

    // Function to calculate and display commission message
    function displayCommissionMessage() {
        // Get lab rate and final rate values
        const labRate = parseFloat(labRateInput.value);
        const finalRate = parseFloat(finalRateInput.value);

        if (finalRate < labRate) {
            // Show error message in red color
            commissionMessageDiv.style.color = 'red';
            commissionMessageDiv.innerText = 'The final rate can\'t be less than the lab rate.';
        } else if (finalRate === '' || isNaN(finalRate)) {
            // Show error message in red color
            commissionMessageDiv.style.color = 'red';
            commissionMessageDiv.innerText = 'The final rate can\'t be empty.';
        } else {
            // Calculate percentage and commission
            const percentage = ((finalRate - labRate) / labRate) * 100;
            const commission = finalRate - labRate;

            // Generate commission message
            const commissionMessage = `Commmision rate and amount is ${percentage.toFixed(0)}% and Rs. ${commission.toFixed(2)}.`;

            // Show commission message in green color
            commissionMessageDiv.style.color = 'green';
            commissionMessageDiv.innerText = commissionMessage;
        }
    }

    // Add event listener for input change on final rate input
    finalRateInput.addEventListener('input', displayCommissionMessage);

    // Add event listener for input change on lab rate input
    labRateInput.addEventListener('input', displayCommissionMessage);

    </script>
@endsection