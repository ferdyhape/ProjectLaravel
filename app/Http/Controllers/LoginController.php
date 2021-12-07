<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login', [
            "title" => "Login"
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        // menampilkan data yang sedang login
        // $nama = Auth::user()->name;
        // dd($nama);

        return back()->with('LoginFailed', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function membercard(Request $request)
    {

        // $dataUser = User::where('id', $request)->get();

        $dataUser = $request->user();
        // dd($dataUser->name);

        return view('frontend.member-card', [
            'user' => $dataUser,
            'title' => 'member Card'
        ]);
    }
}
