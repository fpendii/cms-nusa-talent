@extends('layouts.layout-admin')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<div class="pagetitle">
    <h1>Beranda</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Beranda</li>
      </ol>
    </nav>
  </div>
  <div class="container my-5">

    <div class="row mb-4">
      <div class="col-md-12">
        <h2 class="text-center">Dashboard Admin</h2>
        <p class="text-center">Selamat datang di dashboard. Di sini Anda dapat melihat analisis dan data statistik terkait dengan layanan hosting Anda.</p>
      </div>
    </div>

    <!-- Row for Statistics Cards -->
    <div class="row mb-5">
        <div class="col-md-3">
          <div class="card shadow-sm mb-3" style="height: 100%; min-height: 200px;">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-users"></i> Total Pelanggan</h5>
              <h2 class="card-text">120 Pelanggan</h2>
              <p class="card-text">Jumlah pelanggan yang terdaftar pada platform Anda.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm mb-3" style="height: 100%; min-height: 200px; background-color: #f8f9fa;">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-box"></i> Total Paket Terjual</h5>
              <h2 class="card-text">150 Paket</h2>
              <p class="card-text">Jumlah paket hosting yang berhasil terjual.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm mb-3" style="height: 100%; min-height: 200px; background-color: #e9ecef;">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-dollar-sign"></i> Pendapatan Bulanan</h5>
              <h2 class="card-text">Rp 15.000.000</h2>
              <p class="card-text">Pendapatan yang diperoleh bulan ini.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card shadow-sm mb-3" style="height: 100%; min-height: 200px; background-color: #f1f3f5;">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-exclamation-triangle"></i> Paket Expired</h5>
              <h2 class="card-text">20 Paket</h2>
              <p class="card-text">Jumlah paket hosting yang akan segera berakhir masa aktifnya.</p>
            </div>
          </div>
        </div>
      </div>


    <!-- Row for Charts -->
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Grafik Paket Hosting Terjual</div>
          <div class="card-body">
            <canvas id="salesChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Grafik Pendapatan Bulanan</div>
          <div class="card-body">
            <canvas id="revenueChart"></canvas>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

  <!-- Chart.js Script -->
  <script>
    // Grafik Paket Hosting Terjual
    var ctx1 = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
        datasets: [{
          label: 'Paket Hosting Terjual',
          data: [30, 50, 70, 90, 60, 40],
          backgroundColor: 'rgba(54, 162, 235, 0.5)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    // Grafik Pendapatan Bulanan
    var ctx2 = document.getElementById('revenueChart').getContext('2d');
    var revenueChart = new Chart(ctx2, {
      type: 'line',
      data: {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
        datasets: [{
          label: 'Pendapatan Bulanan',
          data: [5000000, 7000000, 10000000, 8000000, 6000000, 7500000],
          fill: false,
          borderColor: 'rgba(75, 192, 192, 1)',
          tension: 0.1
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>
@endsection
