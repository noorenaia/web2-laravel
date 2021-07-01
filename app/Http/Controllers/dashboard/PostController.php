<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

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
