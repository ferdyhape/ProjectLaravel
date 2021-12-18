<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;
use App\Models\TransaksiSuplier;
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
    public function cetakTabelCategory()
    {
        $tanggal = date("d-m-Y");

        $pdf = PDF::loadView('dashboard.category.cetak', [
            'category' => Category::all()
        ]);
        return $pdf->stream('Data_Category_' . $tanggal . '.pdf');
    }
    public function cetakTabelTransaksi()
    {
        $tanggal = date("d-m-Y");

        $pdf = PDF::loadView('dashboard.transaksiSuplier.cetak', [
            'transaksi' => TransaksiSuplier::all()
        ]);
        return $pdf->stream('Data_Transaksi_' . $tanggal . '.pdf');
    }
}
