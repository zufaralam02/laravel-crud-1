<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//     return view('home');
// });

// Route::view('/teacher', 'teacher');
// Route::view('/student', 'student');
// Route::view('/user', 'user');

// Route::get('/number/{id}', [HomeController::class, 'number']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'read'])->name('teacher');
Route::get('/teacher/detail/{id}', [TeacherController::class, 'detail']);
Route::get('/teacher/add', [TeacherController::class, 'add']);
Route::post('/teacher/insert', [TeacherController::class, 'insert']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
