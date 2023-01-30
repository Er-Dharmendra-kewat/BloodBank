@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/donors.css') }}">


    <div class="container-fluid red-background size">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Donors</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>

    <div class="card-body">

 <a href="{{ url('/addRequest') }}" class="btn btn-primary">Add Request</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Requested By</th>
                    <th scope="col">Recipient</th>
                    <th scope="col">Date Request</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">No.of Bags</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($request as $req)
                        <th>{{ $req->Requested_by }}</th>
                        <td>{{ $req->Recipient_name }}</td>
                        <td>{{ $req->Date_request }}</td>
                        <td>{{ $req->blood_type }}</td>
                        <td>{{ $req->bags }}</td>
                        <td>{{ $req->amount }}</td>
                        <td>{{ $req->purpose }}</td>
                        <td>{{ $req->remarks }}</td>
                        <td>{{ $req->action }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
    </div>




    </div>
    </div>
    </div>
@endsection
