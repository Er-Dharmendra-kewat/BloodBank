@extends('layouts.app')
@section('content')
    <style>
        .size {
            min-height: 0px;
            padding: 60px 0 40px 0;

        }

        .form-container {
            background-color: white;
            border: .5px solid #eee;
            border-radius: 5px;
            padding: 20px 10px 20px 30px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
            box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        }

        .form-group {
            text-align: left;
        }

        h1 {
            color: white;
        }

        /* h3 {
                        color: #e74c3c;
                        text-align: center;
                    } */

        /* .red-bar {
                        width: 25%;
                    } */
    </style>

    <div class="container-fluid red-background size float-end">
        <div class="row">

             {{-- error messages --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


            <div class="col-md-6 offset-md-3">

                <h1 class="text-center">Add Request</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>
    <div class="container size">
        <div class="row">

            <div class="col-md-6 offset-md-3 form-container">

                <div class="card-body">
                    <a href="{{ url('request') }}" class=" btn btn-primary">Back</a>
                    {{-- <a href="{{ url('') }}" class=" btn btn-primary">Add Request</a> --}}

                    <div class="form-group">

                        <form action="{{ route('request') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="request" class="form-label">Requested By</label>
                                <input type="name" class="form-control" id="request" name="Requested_by" placeholder="Name Here!">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient" class="form-label">Recipient</label>
                                <input type="name" class="form-control" id="recipient" name="Recipient_name" placeholder="Data 1">
                            </div>
                            <div class="col-6">
                                <label for="date" class="form-label">Date Request</label>
                                <input type="date" class="form-control" id="date" name="Date_request" placeholder="1234 Main St">
                            </div>
                            <div class="col-5">
                                <label for="blood_type" class="form-label">Blood Type </label>
                                <input type="blood_type" class="form-control" id="blood_type" name="blood_type" placeholder="blood_type">
                            </div>
                            <div class="col-md-3">
                                <label for="Bags" class="form-label">No.of Bags</label>
                                <input type="number" class="form-control" id="Bags" name="bags" placeholder="Num_of_bags">
                            </div>
                            <div class="col-md-4">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="amount" class="form-control" id="amount" name="amount" placeholder="Amt">

                            </div>
                            <div class="col-md-5">
                                <label for="purpose" class="form-label">Purpose</label>
                                <input type="text" class="form-control" id="purpose" name="purpose"
                                    placeholder="purpose of requesting">
                            </div>
                            <div class="col-md-5">
                                <label for="remarks" class="form-label">Remarks</label>
                                <input type="remarks" class="form-control" id="remarsk" name="remarsk" placeholder="Remarks Here!">
                            </div>
                            <div class="col-md-4">
                                <label for="action" class="form-label">Action</label>
                                <input type="action" class="form-control" id="action" name="action" placeholder="Action Here!">
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
