<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontsiteController extends Controller
{
    public function showhome(){
        return view('frontsite.index');
    }
    public function showsingle(){
        return view('frontsite.single');
    }
    public function showlogin(){
        return view('frontsite.login');
    }
    public function showregister(){
        return view('frontsite.register');
    }
}
