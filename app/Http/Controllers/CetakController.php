<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use PDF;

class CetakController extends Controller
{
    public function cetakTabelBarang()
    {
        $tanggal = date("d-m-Y");

        $pdf = PDF::loadView('dashboard.barang.cetak', [
            'barang' => Barang::all()
        ]);
        return $pdf->stream('Data_barang_' . $tanggal . '.pdf');
    }
}
