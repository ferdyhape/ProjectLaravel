<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerAdmin()
    {
        return view('register-admin', [
            "title" => "Register"
        ]);
    }
    public function registerUser()
    {
        return view('register-user', [
            "title" => "Register"
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'phone' => 'required',
            'photo' => 'required|image',
            'address' => 'required|max:20',
            'level' => 'required'
        ]);
        if ($request->file('photo')) {
            $nama_photo = $request->file('photo')->store('user-images');
        }

        $validatedData['photo'] = $nama_photo;

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login');

        return redirect('/login');
    }
}
