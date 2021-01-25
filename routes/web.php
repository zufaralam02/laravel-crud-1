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

Route::get('/', [HomeController::class, 'get']);
Route::get('/teacher', [TeacherController::class, 'get'])->name('teacher');
Route::get('/teacher/detail/{id}', [TeacherController::class, 'detail']);
Route::get('/teacher/add', [TeacherController::class, 'add']);
Route::post('/teacher/add/process', [TeacherController::class, 'addProcess']);
Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit']);
Route::post('/teacher/edit/process/{id}', [TeacherController::class, 'editProcess']);
Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete']);
Route::get('/student', [StudentController::class, 'get']);
Route::get('/user', [UserController::class, 'get']);
