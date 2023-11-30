<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
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
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $userData = $request->validated();

        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'rarm' => $userData['rarm'],
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
    public function destroy(int $userId)
    {
        User::destroy($userId);

        return back();
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

    public function getStudents(Request $request)
    {
        $search = $request->query('search');

        $students = DB::table('users')->where('user_type_id', User::STUDENT)->when($search, function (Builder $query, string $search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->orderByDesc('name')->get();
        
        // $students = User::where('user_type_id', 3)->orderBy('name')->get();

        return view('students')->with('students', $students);
    }

    public function getMonitors(Request $request)
    {
        $search = $request->query('search');

        $monitors = DB::table('users')->where('user_type_id', User::MONITOR)->when($search, function (Builder $query, string $search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->orderByDesc('name')->get();

        // $monitors = User::where('user_type_id', 2)->orderBy('name')->get();

        return view('monitors')->with('monitors', $monitors);
    }

    public function changeRole(int $userId, string $role) {
        $role = UserType::where('role', $role)->first();
        $user = User::findOrFail($userId);

        $user->user_type_id = $role->id;

        $user->save();

        return back();
    }
}
