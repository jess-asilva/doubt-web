<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return View('users.login');
    }

    public function authenticate(AuthenticateRequest $request) //RedirectResponse
    {
        $credentials = $request->validate([
            'ra/rm' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('home');

           // return view('users.teste');
        }

        return back()->withErrors([
            'ra/rm' => 'Usuário ou senha inválido',
        ])->onlyInput('ra/rm');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
