<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PDF;


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

        return back()->with('LoginFailed', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function membercard()
    {

        // $dataUser = User::where('id', $request)->get();

        $dataUser = auth()->user();
        // dd($dataUser->name);

        return view('frontend.member-card', [
            'user' => $dataUser,
            'title' => 'Member Card'
        ]);
    }
    public function cetakMemberCard()
    {

        $dataUser = auth()->user();
        // return view('frontend.cetak-member-card', [
        //     'user' => $dataUser,
        //     'title' => 'Cetak Member Card'
        // ]);


        $pdf = PDF::loadView('frontend.cetak-member-card', [
            'user' => $dataUser,
            'title' => 'Cetak Member Card'
        ]);
        return $pdf->stream('MemberCardXstore.pdf');
    }
}
