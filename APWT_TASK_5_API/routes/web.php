<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionPaperController;
use App\Http\Controllers\RegistrationController;
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
// //Route::get('/home', [indexcontroller :: class, 'index']) -> name('home');
// Route::get('/product', [indexcontroller :: class, 'product'])-> name('product') ;
// Route::get('/teams', [indexcontroller :: class, 'teams'])-> name('teams') ;
// //Route::get('/contactus', [indexcontroller :: class, 'contactus'])-> name('contactus') ;
Route::get('/aboutus', [indexcontroller :: class, 'aboutus'])-> name('aboutus') ;

//Route::get('/', function () {
  //  return view('welcome');
//});

//lab2practice(studentlist)
Route::get('/studentlist', [StudentController :: class, 'studentlist'])-> name('studentlist') ;

Route::get('/studentcreate', [StudentController :: class, 'studentcreate'])-> name('studentcreate') ;

Route::post('/studentcreate', [StudentController :: class, 'studentcreatesubmitted'])-> name('studentcreate') ;

//Route::get('/login', [StudentController :: class, 'login'])-> name('login') ;
//Route::post('/login', [StudentController :: class, 'logindone'])-> name('login') ;

Route::get('/contactus', [contactcontroller :: class, 'contactus'])-> name('contactus') ;
Route::post('/contactus', [contactcontroller :: class, 'contactcreatesubmitted'])-> name('contactus') ;
Route::get('/studentEdit/{id}/{name}',[StudentController::class,'studentedit'])->name('studentedit');
Route::post('/studentedit',[StudentController::class,'studentEditSubmitted'])->name('studentedit');
Route::get('/studentDelete/{id}/{name}',[StudentController::class,'studentDelete'])->name('studentDelete');

Route::get('/teacherCreate', [TeacherController :: class, 'teacherCreate'])-> name('teacherCreate');//->middleware('ValidAdmin');
Route::post('/teacherCreate', [TeacherController :: class, 'teacherCreateSubmitted'])-> name('teacherCreate') ;
Route::get('/teacherList', [TeacherController :: class, 'teacherList'])-> name('teacherList')->middleware('ValidAdmin');

//Teacher Course
//Route::get('/teacher/courses',[TeacherController::class,'teacherCourses'])->name('teacher.courses');
Route::get('/teacher/courses',[TeacherController::class,'teacherCourses'])->name('teacher.courses');
Route::get('/teacher/courses/{id}',[TeacherController::class,'teacherCourses'])->name('teacher.courses');
//Route::get('/teacheList', [TeacherController :: class, 'teacheList'])-> name('teacheList') ;
//course
Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses');

//Teacher login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
//Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//Route::post('/login',[LoginController::class,'loginSubmit2'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//teacher dash
 Route::get('/teacher/dash', [indexcontroller::class,'teacherDash'])->name('teacherDash')->middleware('ValidTeacher');
Route::post('/teacher/dash', [indexcontroller::class,'teacherDash'])->name('teacherDash')->middleware('ValidTeacher');
Route::get('/teacher/dash/teacheList', [TeacherController :: class, 'teacheList'])-> name('teacheList') ->middleware('ValidAdmin');
//admin dash
// Route::get('/admin/dash', [indexcontroller::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');
Route::get('/admin/dash', [indexcontroller::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');
Route::post('/admin/dash', [indexcontroller::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin');

//edit teacher
Route::get('/teacher/profile', [TeacherController::class,'profile'])->name('profile')->middleware('ValidTeacher');
Route::post('/teacher/profile', [TeacherController::class,'profilesubmit'])->name('profilesubmit')->middleware('ValidTeacher');

//Route::get('/upload', [FileUploadController::class,'upload'])->name('upload');//->middleware('ValidTeacher');

Route::get('/file-upload', [ FileUploadController::class, 'fileUpload' ])->name('file.upload')->middleware('ValidTeacher');
Route::post('/file-upload', [ FileUploadController::class, 'fileUploadPost' ])->name('file.upload.post')->middleware('ValidTeacher');


Route::get('question', [ QuestionController::class, 'questionss' ])->name('question')->middleware('ValidTeacher');
Route::get('questionPaper', [ QuestionController::class, 'question' ])->name('questionPaper');
// Route::get('questionPaper', [ QuestionController::class, 'questionShow' ])->name('questionShow');

// Route::any('questionss', function () {
//     return view('questionss');
// });


Route::any('addq', function () {
  return view('addq');
});

Route::any('add', [ QuestionController::class, 'add' ])->name('add');
//Route::get('add', [ QuestionController::class, 'add' ])->name('add');


Route::get('/registration', [RegistrationController :: class, 'teacherCreate'])-> name('teacherCreate');//->middleware('ValidAdmin');
Route::post('/registration', [RegistrationController :: class, 'teacherCreateSubmitted'])-> name('teacherCreate') ;

Route::get('/info', [teacherController :: class, 'index']) -> name('index');