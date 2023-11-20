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
Route::get('/create-account', [UserController::class, 'create'])->name('get.createAccount');
Route::post('/create-account', [UserController::class, 'store'])->name('post.createAccount');

//Login - autenticação
Route::get('/login', [AuthenticateController::class, 'index'])->name('get.login');
Route::post('/login', [AuthenticateController::class, 'authenticate'])->name('post.authenticate');

Route::get('/forgotPassword', function () {
    return view('users.forgotPassword');
})->name('get.forgotPassword');

Route::get('/emailConfirmation', function () {
    return view('users.emailConfirmation');
})->name('get.emailConfirmation');

Route::get('/logout', function () {
    return view('logout');
})->name('get.logout');

//Página Inicial do usuário
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/testeMenu', function () {
    return view('users.testeMenu');
})->name('testeMenu');

Route::get('/registerMonitor', function () {
    return view('users.registerMonitor');
})->name('get.registerMonitor');

Route::get('/user/{id?}', function ($id_user = null) {
    return view('users.home');
})->name('home');

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
})->name('get.monitors');

Route::get('/students', function () {
    return view('students');
})->name('get.students');

Route::get('/schedule', function () {
    return view('schedule');
})->name('get.schedule');

Route::get('/doubts', function () {
    return view('doubts');
})->name('get.doubts');
