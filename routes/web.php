<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\contactDoubtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\formDoubtController;
use App\Mail\formDoubtMail;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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
Route::get('/create-account', [UserController::class, 'create'])->name('get.create-account');
Route::post('/create-account', [UserController::class, 'store'])->name('post.create-account');

//Login - autenticação
Route::get('/login', [AuthenticateController::class, 'index'])->name('get.login');
Route::post('/login', [AuthenticateController::class, 'authenticate'])->name('post.authenticate');

Route::get('/forgot-password', function () {
    return view('users.forgot-password');
})->name('get.forgot-password');

Route::get('/email-confirmation', function () {
    return view('users.email-confirmation');
})->name('get.email-confirmation');

Route::get('user/change-password', [UserController::class, 'editPassword'])->name('get.change-password');
Route::patch('user/change-password', [UserController::class, 'updatePassword'])->name('patch.change-password');

Route::get('/logout', function () {
    return view('logout');
})->name('get.logout');

//Página Inicial do usuário
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/register-monitor', function () {
    return view('users.register-monitor');
})->name('get.register-monitor');

Route::get('/user/{id?}', function ($id_user = null) {
    return view('users.home');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('get.about-us');

//Route::get('/user/{id}', function ($id_user) {
//    return view('users.home');
//})->name('home');

Route::get('/user/{id?}', function ($id_user = null) {
    return view('users.home');
})->name('home');

Route::get('/internet-foum', function () {
    return view('internet-foum');
})->name('internet-foum');

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

Route::post('/doubt', function () {
    return view('doubts');
})->name('get.doubts');

//Rota que coleta as informações do formulário (Adquira o Doubt)
Route::post('/doubts', [contactDoubtController::class, 'store'])->name('post.doubts');

//Route::resource('/doubts', [contactDoubtController::class, 'store'])->name('post.doubts');