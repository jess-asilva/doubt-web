<?php

namespace App\Http\Controllers;


use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AuthenticateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect('home');
        }

        return view("login");
    }

    public function authenticate(AuthenticateRequest $request) //RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');

            // return view('users.teste');
        }

        return back()->withErrors(['rarm' => 'Usuário ou senha inválido'])->onlyInput('rarm');
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
