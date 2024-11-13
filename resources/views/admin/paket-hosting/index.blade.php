@extends('layouts.layout-admin')

@section('content')
    <div class="pagetitle">
        <h1>Paket Hosting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Paket Hosting</li>
            </ol>
        </nav>
    </div>

    <div class="container my-5">
        <!-- Button Tambah Paket -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2>Kelola Paket Hosting</h2>
          <a href="#" class="btn btn-success">Tambah Paket</a>
        </div>

        <div class="row">
          <!-- Hosting Package Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
              <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Paket Hosting 1">
              <div class="card-body">
                <h5 class="card-title">Paket Basic</h5>
                <p class="card-text">Cocok untuk website personal atau blog dengan kebutuhan dasar.</p>
                <ul class="list-unstyled">
                  <li><strong>Harga:</strong> Rp 100,000/bulan</li>
                  <li><strong>Penyimpanan:</strong> 10 GB</li>
                  <li><strong>Bandwidth:</strong> 100 GB</li>
                </ul>
                <a href="{{url('/admin/paket-hosting/edit')}}" class="btn btn-sm btn-primary">Edit Paket</a>
                <a href="{{url('/admin/paket-hosting/delete')}}" class="btn btn-sm btn-danger ms-2">Hapus Paket</a>
              </div>
            </div>
          </div>

          <!-- Hosting Package Card 2 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
              <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Paket Hosting 2">
              <div class="card-body">
                <h5 class="card-title">Paket Pro</h5>
                <p class="card-text">Dapatkan lebih banyak fitur untuk website bisnis atau toko online.</p>
                <ul class="list-unstyled">
                  <li><strong>Harga:</strong> Rp 250,000/bulan</li>
                  <li><strong>Penyimpanan:</strong> 50 GB</li>
                  <li><strong>Bandwidth:</strong> 500 GB</li>
                </ul>
                <a href="{{url('/admin/paket-hosting/edit')}}" class="btn btn-sm btn-primary">Edit Paket</a>
                <a href="{{url('/admin/paket-hosting/delete')}}" class="btn btn-sm btn-danger ms-2">Hapus Paket</a>
              </div>
            </div>
          </div>

          <!-- Hosting Package Card 3 -->
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
              <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Paket Hosting 3">
              <div class="card-body">
                <h5 class="card-title">Paket Premium</h5>
                <p class="card-text">Paket dengan performa tertinggi untuk website perusahaan besar.</p>
                <ul class="list-unstyled">
                  <li><strong>Harga:</strong> Rp 500,000/bulan</li>
                  <li><strong>Penyimpanan:</strong> 100 GB</li>
                  <li><strong>Bandwidth:</strong> Unlimited</li>
                </ul>
                <a href="{{url('/admin/paket-hosting/edit')}}" class="btn btn-sm btn-primary">Edit Paket</a>
                <a href="{{url('/admin/paket-hosting/delete')}}" class="btn btn-sm btn-danger ms-2">Hapus Paket</a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
