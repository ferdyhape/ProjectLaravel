<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiSuplier;

class TransaksiSuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = TransaksiSuplier::all();

        // mengirim data ke view index
        return view('dashboard.transaksiSuplier.transaksi-suplier', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.transaksiSuplier.tambah-transaksi');
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
            'supplier_name' => 'required|max:255',
            'item_name' => 'required|max:255',
            'price' => 'required|integer',
            'qty' => 'required|integer',
            'transaction_date' => 'required|date',
        ]);

        TransaksiSuplier::create($validatedData);

        $request->session()->flash('success', 'Data Supplier berhasil ditambahkan');

        return redirect('/dashboard/transaksi-suplier');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
