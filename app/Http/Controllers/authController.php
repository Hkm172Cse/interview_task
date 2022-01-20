<?php

namespace App\Http\Controllers;


use App\Models\authModel;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function register(Request $req){
        $name = $req->input('user');
        $pass = $req->input('password');
        $email = $req->input('email');

        $result  = authModel::insert(['user'=>$name, 'email'=>$email, 'password'=>$pass]);

       if($result == true){
           return 1;
       }else{
           return 0;
       }
    }

    public function login(Request $req){
        $name = $req->input('email');
        $pass = $req->input('password');
      
        $result = authModel::where('email', '=', $name)->where('password', '=', $pass)->count();
    
        if($result== true){
           $req->session()->put('user', $name);
           return 1;
        }else{
            return 0;
        }
    }
}
