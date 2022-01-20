<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index(){
        return view('productList');
    }

    public function cartIndex(){
        return view('home');
    }

    public function detailsIndex(){
        return view('product_details');
    }

    public function loginIndex(){
        return view('login');
    }

    public function registation(){
        return view('registation');
    }
}
