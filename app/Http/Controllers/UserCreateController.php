<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserCreateController extends Controller
{
    public function create()
    {
        return view('user-create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
            'role' => ['required', 'in:general,admin'],
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->role = $validatedData['role'];

        $user->save();

        $data = [
            'user' => $validatedData,
        ];

        return view('user-store', $data);
    }
}
