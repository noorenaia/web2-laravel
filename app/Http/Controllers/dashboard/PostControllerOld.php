<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\phone;
use App\Models\post;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostControllerOld extends Controller
{
    public function poly_relationship(){
        # 1-1 poly relationship
//        $user = User::find(65);
//        dd($user->image);
//        $post = post::find(33);
//        dd($post->image->url);

    }
    public function relations(){
   // M-N relationship
//        $user = User::find(10);
//        dd($user->roles->toArray());

//       $role=role::find(2);
//       dd($role->users->toArray());

//        // 1-M relationship
//        $post = post::find(51);
//        $comments = $post->comments;
//        dd($comments);
        // 1-1 relationship
//        $phone = phone::find(1);
//        dd($phone->user->name);

//        $user=User::find(1);
//        dd($user->phone);
    }

    public  function orm(){

        #insert into database
        #insert 1
//        $category = new category();
//        $category->title = 'finance';
//        $category->code='FIN';
//        $category->save();

            #insert 2
//        category::create([
//            'title'=>'category',
//            'code'=>'cat'
//        ]);
//$categories = category::all();
//foreach ($categories as $category){
//    echo $category->title. "  ".$category->code."<br>";
//}
//dd();
//dd($categories->toArray());

    }
    public function index()
    {
        return view('admin.posts.index');

//         $posts= DB::table('posts')->first('id',3);
//         dd($posts);
//        $posts = DB::table('post s')->get();
//        foreach ($posts as $post){
//            echo $post->title.'<br>';
//        }
        #database via model
//        $posts = post::all();
//        dd($posts->toArray());
//        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
