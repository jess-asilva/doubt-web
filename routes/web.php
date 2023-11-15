<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\HomeController;

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

//Sobre o Doubt - pagina comercial - cadastro de interesse
Route::get('/', [UserController::class, 'index'])->name('index');

//Cadastro
Route::get('/createAccount', [UserController::class, 'create'])->name('get.createAccount');
Route::post('/createAccount', [UserController::class, 'store'])->name('post.createAccount');

//Login - autenticação
Route::get('/login', [AuthenticateController::class, 'index'])->name('get.login');
Route::post('/login', [AuthenticateController::class, 'authenticate'])->name('post.authenticate');

//Página Inicial do usuário
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/forgotPassword', function () {
    return view('users.forgotPassword');
})->name('get.forgotPassword');

Route::get('/registerMonitor', function () {
    return view('users.registerMonitor');
})->name('get.registerMonitor');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('get.aboutUs');

//Route::get('/user/{id}', function ($id_user) {
//    return view('users.home');
//})->name('home');

Route::get('/user/{id?}', function ($id_user = null) {
    return view('users.home');
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
