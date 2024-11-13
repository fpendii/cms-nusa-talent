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
        <h2 class="mb-4">Edit Paket Hosting</h2>
        <form action="#" method="post">
          <!-- Nama Paket -->
          <div class="mb-3">
            <label for="packageName" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" id="packageName" name="packageName" value="Paket Basic" required>
          </div>

          <!-- Deskripsi Paket -->
          <div class="mb-3">
            <label for="packageDescription" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="packageDescription" name="packageDescription" rows="3" required>Cocok untuk website personal atau blog dengan kebutuhan dasar.</textarea>
          </div>

          <!-- Harga Paket -->
          <div class="mb-3">
            <label for="packagePrice" class="form-label">Harga (Rp)</label>
            <input type="number" class="form-control" id="packagePrice" name="packagePrice" value="100000" required>
          </div>

          <!-- Penyimpanan Paket -->
          <div class="mb-3">
            <label for="packageStorage" class="form-label">Penyimpanan (GB)</label>
            <input type="number" class="form-control" id="packageStorage" name="packageStorage" value="10" required>
          </div>

          <!-- Bandwidth Paket -->
          <div class="mb-3">
            <label for="packageBandwidth" class="form-label">Bandwidth (GB)</label>
            <input type="number" class="form-control" id="packageBandwidth" name="packageBandwidth" value="100" required>
          </div>

          <!-- Tombol Simpan dan Batal -->
          <div class="d-flex justify-content-end">
            <a href="{{url('/admin/paket-hosting')}}" class="btn btn-secondary me-2">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
          </div>
        </form>
      </div>


@endsection
