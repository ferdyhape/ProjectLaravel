@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Welcome Back, Admin <strong>{{ auth()->user()->name }}</strong></h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div> -->
    </div>

    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalbarang }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dolly" style="font-size: 30px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalcategory }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tags" style="font-size: 30px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Transaksi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totaltransaksi }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-scroll" style="font-size: 30px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><strong>List Barang</strong></h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Kategori</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($barang as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->harga }}</td>
                        <td>{{ $b->jumlah }}</td>
                        <td>{{ $b->category->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="dashboard/barang" class="btn btn-primary text-white my-2">Kelola Data Barang</a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><strong>List Kategori</strong></h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($category as $c)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="dashboard/category" class="btn btn-primary text-white my-2">Kelola Data Kategori</a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><strong>List Transaksi Suplier</strong></h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Supplier</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Tanggal Transaksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transaksi as $t)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $t->supplier_name }}</td>
                        <td>{{ $t->item_name }}</td>
                        <td>{{ $t->price }}</td>
                        <td>{{ $t->qty }}</td>
                        <td>{{ $t->transaction_date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="dashboard/transaksi-suplier" class="btn btn-primary text-white my-2">Kelola Data Transaksi Suplier</a>
        </div>
    </div>
</div>
@endsection