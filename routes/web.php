<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

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

Route::get('/', function () {
    return view('login');
});

Route::view('teacher_login','teacher_login');
// Route::view('dashboard', ["student_dashboard/dashboard"]);
// Route::view('dashboard', ["student_dashboard/dashboard"]);
Route::view('settings',"student_dashboard/settings");

Route::view('teacher_analytics', "teacher_dashboard/analytics");
Route::view('teacher_dashboard', "teacher_dashboard/dashboard");
Route::view('teacher_settings', "teacher_dashboard/settings");
Route::post('login', [Home::class,'CheckInputField']);

