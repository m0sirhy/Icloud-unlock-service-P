<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
class LandingController extends Controller
{
    //
    public function server(){
        $categories=Category::where('section', 'server')->get();
        $items=Item::get();
        return view('landing.server',compact('categories','items'));
    }


    public function imei(){
        $categories=Category::where('section', 'imie')->get();
        $items=Item::get();
    
        return view('landing.imie',compact('categories','items'));
    }
}
