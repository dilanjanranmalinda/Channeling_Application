<?php

namespace App\Http\Controllers;
use App\Models\signup;
use Illuminate\Http\Request;
use App\Models\booking;

class signupcontroller extends Controller
{
    public function InsertIn(Request $signin){
       // dd($signin-> all());
       $data = new signup;

       $data-> Username = $signin-> name;
       $data-> Password = $signin-> pass;
       $data-> Email = $signin-> mail;
       $data-> Phone = $signin-> number;
       $data-> NIC = $signin-> NIC;
       $data-> save();

       return view();

         }


         public function data(){ 
            $info = booking::all();

            return view ('doctordashboard')->with('data', $info);

}
}