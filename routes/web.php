<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontsiteController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'do_register'])->name('do_register');
Route::get('/category/{id}',[FrontsiteController::class,'showcategory'])->name('frontsite.category');
Route::get('/search',[FrontsiteController::class,'search'])->name('frontsite.search');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/',[dashboard\dashboardController::class,'index'])->name('admin.admin');
    Route::resource('user',dashboard\UserController::class);
    Route::resource('post',dashboard\PostController::class);
    Route::resource('category',dashboard\categoryController::class);
    Route::resource('comment',dashboard\commentController::class);

});
//Route::get('orm', [dashboard\PostControllerOld::class,'orm']);
//Route::get('relations', [dashboard\PostControllerOld::class,'relations']);
//Route::get('poly_relationship', [dashboard\PostControllerOld::class,'poly_relationship']);


Route::get('/', [FrontsiteController::class,'showhome'])->name('frontsite.home');
Route::get('/single/{id}', [FrontsiteController::class,'showsingle'])->name('frontsite.single');
//Route::get('/login', [FrontsiteController::class,'showlogin'])->name('frontsite.login');
//Route::get('/register', [FrontsiteController::class,'showregister'])->name('frontsite.register');



//Route::get('/', function () {
//    return view('frontsite.index');
//})->name('frontsite.home');

//Route::get('/login', function () {
//    return view('frontsite.login');
//})->name('frontsite.login');
//
//Route::get('/single', function () {
//    return view('frontsite.single');
//})->name('frontsite.single');
//
//Route::get('/register', function () {
//    return view('frontsite.register');
//})->name('frontsite.register');
