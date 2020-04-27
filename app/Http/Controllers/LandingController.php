<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function server(){
        $items=Item::where('section','server')->get()->latest();
        return view('landing.server',compact('items'));
    }


    public function imei(){
        $items=Item::where('section','imei')->get()->latest();

        return view('landing.imie',compact('items'));
    }
}
