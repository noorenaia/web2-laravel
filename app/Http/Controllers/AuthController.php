<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Context\RequestContext;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');

    }
    public function authenticate(Request $request){
        $login_data = ['name'=>$request->name , 'password'=>$request->password];
//        dd($request->toArray());
        if(Auth::attempt($login_data)){
            return redirect()->route('admin.admin');
        }
        return redirect()->back()->with('error','invalid username or password');

    }
    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('frontsite.home');

    }
    public function register(){
        return view('auth.register');
    }
    public function do_register(Request $request){
//        dd($request->toArray());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed']);

        User::create(['email'=>$request->email,
            'name'=>$request->name,
            'password'=>Hash::make($request->password)]);
        return redirect()->route('login')->with('success','user is created');
    }
}
