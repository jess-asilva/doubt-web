<?php

use Illuminate\Support\Facades\Route;

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

//Sobre o Doubt
Route::get('/', function () {
    return view('index');
})->name('about');

//Login
Route::get('/login', function () {
    return view('users.login');
})->name('login');

Route::get('/signup', function () {
    return view('users.signup');
})->name('signup');

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
