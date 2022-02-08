<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\contactcontroller;

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
//Route::get('/home', [indexcontroller :: class, 'index']) -> name('home');
Route::get('/product', [indexcontroller :: class, 'product'])-> name('product') ;
Route::get('/teams', [indexcontroller :: class, 'teams'])-> name('teams') ;
//Route::get('/contactus', [indexcontroller :: class, 'contactus'])-> name('contactus') ;
Route::get('/aboutus', [indexcontroller :: class, 'aboutus'])-> name('aboutus') ;

//Route::get('/', function () {
  //  return view('welcome');
//});

//lab2practice(studentlist)
Route::get('/studentlist', [StudentController :: class, 'studentlist'])-> name('studentlist') ;

Route::get('/studentcreate', [StudentController :: class, 'studentcreate'])-> name('studentcreate') ;

Route::post('/studentcreate', [StudentController :: class, 'studentcreatesubmitted'])-> name('studentcreate') ;

Route::get('/login', [StudentController :: class, 'login'])-> name('login') ;
Route::post('/login', [StudentController :: class, 'logindone'])-> name('login') ;

Route::get('/contactus', [contactcontroller :: class, 'contactus'])-> name('contactus') ;
Route::post('/contactus', [contactcontroller :: class, 'contactcreatesubmitted'])-> name('contactus') ;
