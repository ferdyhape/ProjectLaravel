<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('LoginUser.register', [
            "title" => "Register"
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $validatedData['level'] = 'user';
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login');

        return redirect('/login');
    }
}
