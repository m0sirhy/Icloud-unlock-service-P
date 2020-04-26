<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function server(){
        return view('landing.server');
    }


    public function imei(){
        return view('landing.imie');
    }
}
