@extends('layouts.app')
@section('content')
    <div class="container-fluid header-img">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <div class="header">
                    <h1 class="text-center">Donate the blood, save the life</h1>
                    <p class="text-center">Donate the blood to help the others.</p>
                </div>
                <h1 class="text-center">Search The Donors</h1>
                <hr class="white-bar text-center">

                {{-- ////////////////////////////////////////////////// --}}
                <form action="{{ route('search-data') }}" method="post" class="form-inline text-center"
                    style="padding: 40px 0px 0px 5px;">
                    <div class="form-group text-center justify-content-center">
                        {{-- <input type="search" name="search" class="form-control" placeholder="Search by name of email"
                            value="{{ $search }}"> --}}

                        <select style="width: 220px; height: 45px;" name="city" id="city"
                            class="form-control demo-default" required>
                            <option value="">-- Select --</option>
                            <option value="Bhairahawa">Bhairahawa</option>
                            <option value="Padsari">Padsari</option>
                            <option value="Bashdilwa">Bashdilwa</option>
                            <option value="Badlapur">Badlapur</option>
                        </select>

                    </div>
                    <div class="form-group center-aligned">
                        <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
                            class="form-control demo-default text-center margin10px">

                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>z
                            <option value="O-">O-</option>

                        </select>
                    </div>
                    {{-- /////////////////search from here --}}


                    {{-- @foreach ($data as $donates)
                        <th>{{ $donates->name }}</th>
                        <td>{{ $donates->blood_group }}</td>
                        <td>{{ $donates->gender }}</td>
                        <td>{{ $donates->dob }}</td>
                        <td>{{ $donates->email }}</td>
                        <td>{{ $donates->contact_no }}</td>
                        <td>{{ $donates->city }}</td>

                        </tr>
                    @endforeach  --}}


                    <div class="form-group center-aligned">
                        <button type="submit" class="btn btn-lg btn-danger">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- header ends -->

    <!-- donate section -->
    <div class="container-fluid red-background">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
                <hr class="white-bar">
                <p class="text-center pera-text">
                    We are a group of exceptional programmers; our aim is to promote education. If you are a student, then
                    contact us to secure your future. We deliver free international standard video lectures and content. We
                    are also providing services in Web & Software Development.

                    We are a group of exceptional programmers; our aim is to promote education. If you are a student, then
                    contact us to secure your future. We deliver free international standard video lectures and content. We
                    are also providing services in Web & Software Development.
                </p>
                <a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
            </div>
        </div>
    </div>
    <!-- end doante section -->


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h3 class="text-center red">Our Vission</h3>
                    <img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168"
                        height="168">
                    <p class="text-center">
                        We are a group of exceptional programmers; our aim is to promote education. If you are a student,
                        then contact us to secure your future. We deliver free international standard video lectures and
                        content. We are also providing services in Web & Software Development.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <h3 class="text-center red">Our Goal</h3>
                    <img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                        We are a group of exceptional programmers; our aim is to promote education. If you are a student,
                        then contact us to secure your future. We deliver free international standard video lectures and
                        content. We are also providing services in Web & Software Development.
                    </p>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <h3 class="text-center red">Our Mission</h3>
                    <img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                        We are a group of exceptional programmers; our aim is to promote education. If you are a student,
                        then contact us to secure your future. We deliver free international standard video lectures and
                        content. We are also providing services in Web & Software Development.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- end aboutus section -->
@endsection
