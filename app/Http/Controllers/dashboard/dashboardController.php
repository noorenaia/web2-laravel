<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index(){

        $user = DB::table('users')->count();
        $post = DB::table('posts')->count();
        $category = DB::table('categories')->count();
        $comment = DB::table('comments')->count();
        return view('admin.dashboard',compact('user','post','category','comment'));
//        return view('admin.dashboard');
    }
}
