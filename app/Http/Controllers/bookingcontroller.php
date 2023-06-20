<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class bookingcontroller extends Controller
{
    public function booking (Request $data){

        //dd($data->all());

        $info = new booking;

        $info->name = $data->visitor_name;
        $info->phone = $data->phone;
        $info->age = $data->age;
        $info->gender = $data->gen;
        $info->doctor = $data->doctor;
        $info->date = $data->checkin;
        $info-> save();

        return view('booking');




    }
}
