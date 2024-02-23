<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function pro ducts(){
        return view('products');
    }
    public function aboutUs(){
        return view('about-us');
    }
}