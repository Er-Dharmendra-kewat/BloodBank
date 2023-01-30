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
        <a href="{{ url('/donate') }}"class="btn btn-primary">Donate blood</a>

         {{-- <form action=""  method="GET" class="col-9">
            <div class="form-group">
                <input type="search" id="" name="search" class="form-control"
                    placeholder="Search by name of email" value="{{ $search }}">
            </div>
            <button class=" btn btn-primary">Search</button>
            <a href="{{ url('donors') }}">
                <button type="button" class=" btn btn-primary">Reset</button>
            </a>



        </form> --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Blood group</th>
                    <th scope="col">Gender</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">city</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($donate as $donateData)
                    <tr>
                        <th>{{ $donateData->id }}</th>
                        <th>{{ $donateData->name }}</th>
                        <td>{{ $donateData->blood_group }}</td>
                        <td>{{ $donateData->gender }}</td>
                        <td>{{ $donateData->dob }}</td>
                        <td>{{ $donateData->email }}</td>
                        <td>{{ $donateData->contact_no }}</td>
                        <td>{{ $donateData->city }}</td>

                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach --}}
            </tbody>
        </table>


    </div>
@endsection
