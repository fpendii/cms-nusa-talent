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
        <h2>Tambah Paket Hosting Aktif</h2>
        <form action="your_submit_url_here" method="POST">

          <!-- Select User ID -->
          <div class="mb-3">
            <label for="user_id" class="form-label">Pilih Customer</label>
            <select class="form-select" id="user_id" name="user_id" required>
              <option value="" disabled selected>Pilih Customer</option>
              <!-- Example of user options, replace with dynamic data from your database -->
              <option value="1">Ahmad Ridwan</option>
              <option value="2">Siti Budiarti</option>
              <option value="3">Joko Saputra</option>
            </select>
            <small class="form-text text-muted">Jika pelanggan belum terdaftar, <a href="your_registration_url_here" class="text-primary">klik di sini untuk mendaftar</a>.</small>
          </div>

          <!-- Select Package ID -->
          <div class="mb-3">
            <label for="package_id" class="form-label">Pilih Paket</label>
            <select class="form-select" id="package_id" name="package_id" required>
              <option value="" disabled selected>Pilih Paket</option>
              <!-- Example of package options, replace with dynamic data from your database -->
              <option value="1">Paket Basic</option>
              <option value="2">Paket Pro</option>
              <option value="3">Paket Premium</option>
            </select>
          </div>

          <!-- Domain -->
          <div class="mb-3">
            <label for="domain" class="form-label">Domain</label>
            <input type="text" class="form-control" id="domain" name="domain" required>
          </div>

          <!-- Start Date -->
          <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
          </div>

          <!-- End Date -->
          <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="{{url('/admin/costumer')}}" type="submit" class="btn btn-secondary">Batal</a>
        </form>
      </div>
@endsection
