@extends('layouts.layout-admin')

@section('content')
    <div class="pagetitle">
        <h1>Costumer</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Costumer</li>
            </ol>
        </nav>
    </div>
    <div class="container my-5">
        <div class="d-flex gap-2 align-items-center mb-4">
            <h2>Paket Hosting Aktif</h2>
            <div class="ms-auto">
                <a href="{{url('/admin/costumer/tambah')}}" class="btn btn-primary">Tambah Costumer</a>
            </div>

        </div>
        <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Cari pelanggan...">
            <button class="btn btn-outline-secondary" type="button">Cari</button>
        </div>

        <div class="row">
            <!-- Contoh Card untuk Paket Pelanggan -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ahmad Ridwan</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Paket Basic</h6>
                        <p class="card-text">
                            <strong>Status:</strong> <span class="badge bg-success">Aktif</span><br>
                            <strong>Masa Aktif:</strong> 2024-11-30
                        </p>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Siti Budiarti</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Paket Pro</h6>
                        <p class="card-text">
                            <strong>Status:</strong> <span class="badge bg-warning text-dark">Pending</span><br>
                            <strong>Masa Aktif:</strong> 2025-01-15
                        </p>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Joko Saputra</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Paket Premium</h6>
                        <p class="card-text">
                            <strong>Status:</strong> <span class="badge bg-danger">Non-Aktif</span><br>
                            <strong>Masa Aktif:</strong> 2023-12-01
                        </p>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
