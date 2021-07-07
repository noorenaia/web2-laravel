<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class FrontsiteController extends Controller
{
    public function showhome(){
        $post = post::orderBy('created_at')->paginate(3);
        $category = category::orderBy('created_at','desc')->paginate(5);
//        return view('frontsite.index');
        return view('frontsite.index',compact('post','category'));
    }
    public function showcategory($cat_id){
        $category=category::find($cat_id);
        $Posts=post::where('category_id',$cat_id)->paginate();
        return view('frontsite/category',compact('category','Posts'));


    }
    public function search(Request $request){

        $searched=$request->search;
        $post=post::where('title', 'like', '%'.$searched.'%')->orwhere('body','like','%'.$searched.'%')->get();
        $catagory=category::all();
        return view('frontsite.search',compact('catagory','post','searched'));
    }
    public function showsingle($id , Request $request){

        $detail = post::find($id)->increment('views');
        $post = post::find($id);

        return view('frontsite.single',compact('post'));
    }
//    public function showlogin(){
//        return view('frontsite.login');
//    }
//    public function showregister(){
//        return view('frontsite.register');
//    }
}
