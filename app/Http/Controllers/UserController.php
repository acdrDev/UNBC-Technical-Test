<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('users.show', ['users' => $users]);
    }

    public function create()
    {
        $users = User::all();
        return view('users.create', ['users' => $users]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $user = new User($request->except(['_token']));

        $user->save();

        return response()->redirectTo(route('users.show'));
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->except(['_token']));

        return response()->redirectTo(route('users.show'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'User deleted succesfully'], 200);
    }
}
