<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup','App\Http\Controllers\pagecontroller@signup');

Route::get('/dlogin', function () {
    return view('Doctor_sign_in');
});

Route::get('/plogin', function () {
    return view('Patients_sign_in');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/check','App\Http\Controllers\signupcontroller@InsertIn');

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/bookingsystem', function () {
    return view('bookingsystem');
});

Route::post ('/passdata','App\Http\Controllers\bookingcontroller@booking');

Route::get('/doctordashboard', 'App\Http\Controllers\signupcontroller@data');