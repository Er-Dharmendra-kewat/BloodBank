<?php

namespace App\Http\Controllers;

use App\Models\donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
     public function donate(){


        return view('pages.donate');
     }

     public function store(Request $req){

        // print_r($req->all()); //Its working doode


        $donate = new donate;
        // $donate = donate::paginate(5);
        $donate->name = $req->input('name');
        $donate->blood_group = $req->input('blood_group');
        $donate->gender = $req->input('gender');
        $donate->dob = $req->input('dob');
        $donate->email = $req->input('email');
        $donate->contact_no = $req->input('contact_no');
        $donate->city = $req->input('city');
        $donate->password = $req->input('password');
        $donate->c_password = $req->input('c_password');
        $donate->save();


        return redirect('donate')->with('status','Donors added successfully');



     }
}
