<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontsiteController;
use App\Http\Controllers\dashboard;
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

Route::prefix('admin')->group(function (){
    Route::get('/',[dashboard\dashboardController::class,'index']);
    Route::resource('user',dashboard\UserController::class);
    Route::resource('post',dashboard\PostController::class);
    Route::resource('category',dashboard\categoryController::class);

});
Route::get('orm', [dashboard\PostController::class,'orm']);

Route::get('/', [FrontsiteController::class,'showhome'])->name('frontsite.home');
Route::get('/single', [FrontsiteController::class,'showsingle'])->name('frontsite.single');
Route::get('/login', [FrontsiteController::class,'showlogin'])->name('frontsite.login');
Route::get('/register', [FrontsiteController::class,'showregister'])->name('frontsite.register');



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
