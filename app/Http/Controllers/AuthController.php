<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function Register(){
        return view("halaman/Register");
    }
    function Welcome(Request $request){
        return view("halaman/Welcome");
    }
}
