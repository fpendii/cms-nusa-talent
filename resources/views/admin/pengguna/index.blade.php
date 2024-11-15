@extends('layouts.layout-admin')

@section('content')
<div class="pagetitle">
    <h1>Pengguna</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">Pengguna</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="card">
    <div class="card-body pt-3">
      <!-- Bordered Tabs -->
      <ul class="nav nav-tabs nav-tabs-bordered">

        <li class="nav-item">
          <a href="/admin/pengguna/admin" class="nav-link active">Admin</a>
        </li>

        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Costumer</button>
        </li>

      </ul>
      <div class="tab-content pt-2">

        <div class="tab-pane fade show active profile-overview" id="profile-overview">
          <h5 class="card-title">About</h5>
          <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

          <h5 class="card-title">Profile Details</h5>

          <div class="row">
            <div class="col-lg-3 col-md-4 label ">Full Name</div>
            <div class="col-lg-9 col-md-8">Kevin Anderson</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Company</div>
            <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Job</div>
            <div class="col-lg-9 col-md-8">Web Designer</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Country</div>
            <div class="col-lg-9 col-md-8">USA</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Address</div>
            <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Phone</div>
            <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Email</div>
            <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
          </div>

        </div>






      </div><!-- End Bordered Tabs -->

    </div>
  </div>
@endsection
