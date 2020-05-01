<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
class LandingController extends Controller
{
    //
    public function server(){
        $phone = Category::where('section','imie')->get();
        dd($phone);
        

        $items=Item::where('section','server')->category();

        return view('landing.server',compact('items'));
    }


    public function imei(){
        $items=Item::where('section','imei')->get()->latest();

        return view('landing.imie',compact('items'));
    }
}
