<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

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
     *        'ra/rm' => $request->input('rm/ra'),
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
            'ra/rm' => $userData['ra/rm'],
            'password' => Hash::make($userData['password']),
            'id_type_user' => 2,
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
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
