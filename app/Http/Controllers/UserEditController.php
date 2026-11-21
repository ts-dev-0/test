<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserEditController extends Controller
{
    public function edit(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('user-edit');
        }

        $userId = $request->input('id');
        $userData = User::find($userId);
        $data = [
            'user' => $userData
        ];
        return view('user-edit', $data);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => ['required', 'exists:users,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'role' => ['required', 'in:general,admin'],
        ]);

        $user = User::find($validatedData['id']);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->role = $validatedData['role'];

        $user->save();

        $data = [
            'user' => $validatedData,
        ];

        return view('user-update', $data);
    }
}
