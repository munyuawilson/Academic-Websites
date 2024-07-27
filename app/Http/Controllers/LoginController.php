<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $request){

        return view('pages.admin.admin');   
    }
}
