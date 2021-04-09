<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\conn;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('sitehome',[conn::class,'base']);
Route::get('projects',[conn::class,'projects']);
Route::get('blog',[conn::class,'blog']);
Route::get('about',[conn::class,'about']);
Route::get('contact',[conn::class,'contact']);
Route::get('services',[conn::class,'services']);
Route::get('admin',[conn::class,'admin']);
Route::get('student',[conn::class,'student']);
Route::get('show',[conn::class,'show']);
Route::post('adminevent',[conn::class,'adminevent']);
Route::post('adminposts',[conn::class,'adminposts']);
Route::post('adminboard',[conn::class,'adminboard']);
Route::post('adminstrategy',[conn::class,'adminstrategy']);
Route::post('adminpolicy',[conn::class,'adminpolicy']);
Route::post('admincourses',[conn::class,'admincourses']);
Route::post('writepost',[HomeController::class,'writepost']);








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
