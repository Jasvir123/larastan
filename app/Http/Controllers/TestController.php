<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function products(){
        return view('products');
    }
    public function aboutUs(){
        return view('about-us');
    }
}