<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BioskopController;


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
    return view('page.homepage');
});

Route::get('/720p',[BioskopController::class,'show720']); 
Route::get('/1080p',[BioskopController::class,'show1080']);
Route::get('/faq',[BioskopController::class,'faq']);
Route::get('/homepage',[BioskopController::class,'index']);
Route::get('/nonton',[BioskopController::class,'play']);