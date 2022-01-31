<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;

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

Route::get('/home', [indexcontroller :: class, 'index']) -> name('home');
Route::get('/product', [indexcontroller :: class, 'product'])-> name('product') ;
Route::get('/teams', [indexcontroller :: class, 'teams'])-> name('teams') ;
Route::get('/contactus', [indexcontroller :: class, 'contactus'])-> name('contactus') ;
Route::get('/aboutus', [indexcontroller :: class, 'aboutus'])-> name('aboutus') ;

//Route::get('/', function () {
  //  return view('welcome');
//});
