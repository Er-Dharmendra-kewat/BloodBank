<?php

namespace App\Http\Controllers;


use App\Models\donate;
use App\Models\BloodRequest;
use Illuminate\Http\Request;

class Pagescontroller extends Controller
{


    public function index(){

        return view('pages.index');
    }



    public function about(){
        return view('pages.about');
    }

   public function donate(){


    return view('pages.donate');
}
    public function donors(){
        // $donate = donate::all();

        // return view('pages.donors',compact('donate'));
        return view('pages.donors');
    }

    public function BloodRequest(){
        $request = BloodRequest::all();
        return view('pages.Blood_request',compact('request'));
    }

    public function addRequest(){

        $request = BloodRequest::all();

    return view('pages.add_request',compact('request'));
    }

    public function storeRequest(Request $req){
        // dd('hello');
        // dd($req->bags);

        // <!-- print_r($req->all()); -->


        // validation for tables

        $validated = $req->validate([
            'Requested_by' => 'required',
            'Recipient_name' => 'required',
            'Date_request' =>'required',
            'blood_type' =>'required',
            'bags' =>'required',
            'amount' =>'required',
            'purpose' =>'required',
            'remarks' =>'required',
            'action' =>'required',
        ]);


        $request = new BloodRequest;

        $request->Requested_by =$req->input('Requested_by');
        $request->Recipient_name =$req->input('Recipient_name');
        $request->Date_request =$req->input('Date_request');
        $request->blood_type =$req->input('blood_type');
        $request->bags =$req->input('bags');
        $request->amount =$req->input('amount');
        $request->purpose =$req->input('purpose');
        $request->remarks =$req->input('remarks');
        $request->action =$req->input('action');
        $request->save();

        return redirect('addRequest')->with('status','Blood Request Added Successfully');


    }






}

