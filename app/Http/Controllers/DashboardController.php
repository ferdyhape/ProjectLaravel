<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;
use App\Models\TransaksiSuplier;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'barang' => Barang::all(),
            'category' => Category::all(),
            'transaksi' => TransaksiSuplier::all(),

            'totalbarang' => Barang::count(),
            'totalcategory' => Category::count(),
            'totaltransaksi' => TransaksiSuplier::count(),
        ]);
    }
}
