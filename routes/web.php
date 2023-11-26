<?php

use App\Models\PublicationLike;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\ContactDoubtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\FormDoubtController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\PublicationLikeController;
use App\Mail\formDoubtMail;

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
Route::get('/login', [AuthenticateController::class, 'index'])->name('login');
Route::post('/login', [AuthenticateController::class, 'authenticate'])->name('post.authenticate');

Route::get('/forgotPassword', function () {
    return view('users.forgotPassword');
})->name('get.forgotPassword');

Route::get('/emailConfirmation', function () {
    return view('users.emailConfirmation');
})->name('get.emailConfirmation');

Route::get('user/changePassword', [UserController::class, 'editPassword'])->name('get.changePassword');
Route::patch('user/changePassword', [UserController::class, 'updatePassword'])->name('patch.changePassword');

Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

Route::post('/doubts', [ScheduleController::class, 'store'])->name('post.schedule');

Route::get('/user/{id?}', function ($id_user = null) {
    return view('home');
})->name('users-home');

Route::get('/internetForum', function () {
    return view('internetForum');
})->name('internetForum');

Route::get('/monitors', function () {
    return view('monitors');
})->name('get.monitors');

Route::get('/students', function () {
    return view('students');
})->name('get.students');



Route::get('/doubts', function () {
    return view('doubts');
})->name('get.doubts');

//Rota que coleta as informações do formulário (Adquira o Doubt)
Route::post('/doubts', [contactDoubtController::class, 'store'])->name('post.doubts');

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('get.aboutUs');

//Route::resource('/doubts', [contactDoubtController::class, 'store'])->name('post.doubts');

Route::get('/privacyPolicy', function () {
    return view('privacyPolicy');
})->name('privacyPolicy');


Route::middleware('auth')->group(function () {
    Route::get('/home', [PublicationController::class, 'index'])->name('home');
    Route::post('/publication', [PublicationController::class, 'store'])->name('post.publication');
    Route::get('/publication/{publicationId}', [PublicationController::class, 'show'])->name('get.publication');
    Route::post('/publication/{publicationId}/reply', [ReplyController::class, 'store'])->name('post.reply');
    Route::get('/publication/{publicationId}/like', [PublicationLikeController::class, 'store'])->name('like-publication');
    Route::get('/publication/{publicationId}/unlike', [PublicationLikeController::class, 'destroy'])->name('unlike-publication');

    Route::get('/schedule', [ScheduleController::class, 'index'])->name('get.schedule');
    Route::post('/schedule', [ScheduleController::class, 'store'])->name('post.schedule');
    Route::delete('/schedule/{scheduleId}', [ScheduleController::class, 'destroy'])->name('delete.schedule');
});

