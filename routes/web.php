<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\HomeController;
use App\Mail\maingullDoubt;
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

Route::get('/createAccount', function () {
    return view('users.createAccount');
})->name('get.createAccount');

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

//Rota que envia o token para o usuário
Route::post('/mail', function (Request $email) {
    //dd($email->all());
    Mail::to($email)->send(new maingullDoubt);
    return view('users.login');
})->name('mail');


/*Route::get('/mail', function () {
    Mail::to('joaopaulodonato91@gmail.com')->send(new maingullDoubt);
    return view('users.login');
})->name('mail');


Route::post('/mail', function (Request $email) {
   echo $email;
})->name('mail');

*/
/*Route::post('/mail', function (Request $email) {
    $subject = 'Teste envio de e-mail';
    $message = 'Segue sua nova senha';
    $headers = 'From: doubt@teste.com' .  "r\n" . 
        'Reply-to: doubt@teste.com';
        
    mail($email, $subject, $message, $headers);
    return view('users.login');
})->name('mail');
//mail($to, $subject, $message, $headers);
*/