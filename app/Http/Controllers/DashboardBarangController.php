<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pengambilan data barang di tabel barang
        $barang = Barang::all();

        // mengirim data ke view index
        return view('dashboard.barang.barang', ['barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barang.tambah-barang', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'category_id' => 'required|integer',
            'nama' => 'required|min:3|max:255',
            'harga' => 'required|integer',
            'jumlah' => 'required|integer',
            'gambar' => 'required|image'
        ]);

        if ($request->file('gambar')) {
            $nama_gambar = $request->file('gambar')->store('product-images');
        }

        $validatedData['gambar'] = $nama_gambar;

        Barang::create($validatedData);

        // $request->session()->flash('success', 'Data barang berhasil ditambahkan');

        return redirect('/dashboard/barang')->with('success', 'Data barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        // return view('dashboard.barang.detail-barang');
        return view('dashboard.barang.detail-barang', [
            'barang' => $barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('dashboard.barang.edit-barang', [
            'barang' => $barang,
            'category' => Category::all(),
            'id' => $barang->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {

        $rules = ([
            'category_id' => 'required|integer',
            'nama' => 'required|min:3|max:255',
            'harga' => 'required|integer',
            'gambar' => 'required|image',
            'jumlah' => 'required|integer',
        ]);

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->gambarLama) {
                Storage::delete($request->gambarLama);
            }
            $nama_gambar = $request->file('gambar')->store('product-images');
        }
        $validatedData['gambar'] = $nama_gambar;

        Barang::where('id', $barang->id)->update($validatedData);

        $request->session()->flash('success', 'Data Barang berhasil diupdate');

        return redirect('/dashboard/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        if ($barang->gambar) {
            Storage::delete($barang->gambar);
        }

        Barang::destroy($barang->id);
        return redirect('dashboard/barang')->with('success', 'Data barang berhasil dihapus');
    }
}
