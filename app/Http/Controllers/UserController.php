<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create-account');
    }

    /**
     * public function store(StoreUserRequest $request)
     *{
     *    $user = User::create([
     *       'name' => $request->input('users'),
     *        'email' => $request->input('e-mail'),
     *        'ra-rm' => $request->input('rm-ra'),
     *    ]);

     *    return redirect('');
     *}
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $userData = $request->validated();

        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'ra-rm' => $userData['ra-rm'],
            'password' => Hash::make($userData['password']),
            'user_type_id' => 2,
        ]);

        $user->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::findOrFail(Auth::id());

        return view('users.profile')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user = User::findOrFail(Auth::id());
        $userData = $request->validated();

        if (!Hash::check($userData['password'], $user->password)) {
            return back()->withErrors([
                'password' => 'Senha incorreta.',
            ]);
        }

        $anotherUser = User::select('email')->where('email', $userData['email'])->where('id', "<>", Auth::id())->get();

        if ($anotherUser->isNotEmpty()) {
            return back()->withErrors([
                'email' => 'E-mail já cadastrado.',
            ])->onlyInput('name', 'email');
        }

        $user->name = $userData['name'];
        $user->email = $userData['email'];

        $user->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy(Auth::id());

        return redirect('/logout');
    }

    /**
     * Show the form for editing password.
     *
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('users.change-password');
    }

    /**
     * Update password.
     *
     * @param \App\Http\Requests\UpdatePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = User::findOrFail(Auth::id());
        $passwords = $request->validated();

        if (!Hash::check($passwords['password'], $user->password)) {
            return back()->withErrors([
                'password' => 'A senha está incorreta.',
            ]);
        }

        $user->password = Hash::make($passwords['new_password']);

        $user->save();

        return redirect('/profile');
    }
}
