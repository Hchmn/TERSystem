<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Student;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\Auth\AuthController;
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

// Route::get('/', function () {
//     return view('login');
// });

// Route::view('teacher_login','teacher_login');


//STUDENT ROUTES
Route::get('/', [Home::class, 'LoginMenu']);
Route::get('dashboard', [Student::class,'Dashboard']);
Route::get('settings', [Student::class,'Settings']);

//TEACHER ROUTES
Route::get('teacher_login', [Home::class, 'TeacherLoginMenu']);
Route::get('teacher_dashboard', [Teacher::class,'Teacher_Dashboard']);
Route::get('teacher_settings', [Teacher::class,'Teacher_Settings']);
Route::get('teacher_analytics', [Teacher::class, 'Teacher_Analytics']);
Route::post('login', [Home::class,'CheckInputField']);

