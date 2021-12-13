<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if ($request->user()->level == 'admin') {
            return view('dashboard.edit-user', [
                'user' => $request->user(),
                'title' => 'Edit Profil',
            ]);
        } elseif (auth()->user()->level == 'user') {
            return view('frontend.edit-user', [
                'user' => $request->user(),
                'title' => 'Edit Profil',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = ([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255',
            'phone' => 'required',
            'address' => 'required|max:20',
            'level' => 'required'
        ]);

        $validatedData = $request->validate($rules);

        if ($request->file('photo')) {
            if ($request->photoLama) {
                Storage::delete($request->photoLama);
            }
            $nama_gambar = $request->file('photo')->store('user-images');
            $validatedData['photo'] = $nama_gambar;
        }
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $request->id)->update($validatedData);

        $request->session()->flash('success', 'Profil berhasil diupdate');

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
