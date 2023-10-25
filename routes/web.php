<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Sobre o Doubt - pagina inicial
Route::get('/', [UserController::class, 'index'])->name('index');

//Login
Route::get('/login', [UserController::class, ''])->name('login');

Route::get('/signup', [UserController::class, 'create'])->name('get.signup');
Route::post('/signup', [UserController::class, 'store'])->name('post.signup');

Route::get('/user/{id}', function ($id_user) {
    return view('home');
})->name('home');

Route::get('/internetFoum', function () {
    return view('internetFoum');
})->name('internetFoum');

Route::get('/monitors', function () {
    return view('monitors');
})->name('monitors');

Route::get('/students', function () {
    return view('students');
})->name('students');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/doubts', function () {
    return view('doubts');
})->name('doubts');
