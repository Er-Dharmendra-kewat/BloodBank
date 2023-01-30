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

        h3 {
            color: #e74c3c;
            text-align: center;
        }

        .red-bar {
            width: 25%;
        }
    </style>



    <div class="container-fluid red-background size float-end">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Donate</h1>
                <hr class="white-bar">
            </div>
        </div>
    </div>

    <div class="container size">
        <div class="row">

            <div class="col-md-6 offset-md-3 form-container">
                <!-- Error Messages -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h3>Fill Up</h3>
                <hr class="red-bar">

                    <a href="{{ url('/donors') }}" class="btn btn-primary">Back</a>

                <form class="form-group" action="{{ route('my-form') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" id="fullname" placeholder="Full Name" required
                            pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
                    </div>
                    <!--full name-->
                    <div class="form-group">
                        <label for="name">Blood Group</label><br>
                        <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                            <option value="">---Select Your Blood Group---</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O+</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <!--End form-group-->
                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        Male<input type="radio" name="gender" id="gender" value="Male"
                            style="margin-left:10px; margin-right:10px;" checked>
                        Fe-male<input type="radio" name="gender" id="gender" value="Fe-male"
                            style="margin-left:10px;">
                    </div>
                    <!--gender-->
                    <div class="form-inline">
                        <label for="name">Date of Birth</label><br>
                         <input type="date"name="dob" value="dob" >

                    </div>
                    <!--End form-group-->
                    <div class="form-group">
                        <label for="fullname">Email</label>
                        <input type="text" name="email" id="email" placeholder="Email"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="contact_no">Contact No</label>
                        <input type="text" name="contact_no" value="" placeholder="03********"
                            class="form-control" required pattern="^\d{11}$" title="11 numeric characters only"
                            maxlength="11">
                    </div>
                    <!--End form-group-->
                    <div class="form-group">
                        <label for="city">City</label>
                        <select name="city" id="city" class="form-control demo-default" required>
                            <option value="">-- Select --</option>
                                <option  id="city"value="Bhairahaw">Bhairahawa</option>
                                <option  id="city" value="Padsari">Padsari</option>
                                <option id="city" value="Butwal">Butwal</option>
                                <option id="city" value="Parasi">Parasi</option>
                        </select>
                    </div>
                    <!--city end-->

                    <!--End form-group-->
                    <div class="form-inline">
                        <input type="checkbox" name="term" value="true" required style="margin-left:10px;">
                        <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and
                                E-Mail in Blood donors List</b></span>
                    </div>
                    <!--End form-group-->

                    <div class="form-group">
                        <button id="submit" name="submit" type="submit"
                            class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
