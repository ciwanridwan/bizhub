@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'titlePage' => __('Material
Dashboard')])

@section('style')
<style>
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}
</style>
@endsection

@section('content')
<div class="container" style="height: auto; padding: 50px">
  <div class="row justify-content-center">
    <div class="col-lg-7 col-md-8">
      <h1 class="text-white text-center">{{ __('Selamat datang di BIZHUB') }}</h1>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        @php
        $slider = DB::table('sliders')->first();
        @endphp
        <div class="carousel-inner">
          <div class="carousel-item active">
            {{-- <img class="d-block w-100" src="" alt="First slide"> --}}
            <h3>{{$slider->slider1}}</h3>
          </div>
          <div class="carousel-item">
            {{-- <img class="d-block w-100" src="..." alt="Second slide"> --}}
            <h3>{{$slider->slider2}}</h3>
          </div>
          <div class="carousel-item">
            {{-- <img class="d-block w-100" src="..." alt="Third slide"> --}}
            <h3>{{$slider->slider3}}</h3>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('chart')
<div class="about-section col-md-12">
  <h1>Fitur Yang Kami Sediakan</h1>
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <a href="{{(route('register-peserta'))}}">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Daily Sales</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> updated 4 minutes ago
            </div>
          </div>
        </a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <a href="{{(route('register-peserta'))}}">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Email Subscriptions</h4>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </a>
        </div>
      </div>


      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header card-header-danger">
            <a href="{{(route('register-peserta'))}}">
            <div class="ct-chart" id="completedTasksChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Completed Tasks</h4>
            <p class="card-category">Last Campaign Performance</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> campaign sent 2 days ago
            </div>
          </div>
        </a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <a href="{{(route('register-peserta'))}}">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Daily Sales</h4>
            <p class="card-category">
              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
          </div>
          <div class="card-footer" style="padding: 50px;">
            <div class="stats">
              <i class="material-icons">access_time</i> updated 4 minutes ago
            </div>
          </div>
        </a>
        </div>
      </div>

      <div class="about-section col-md-12">
        <h1>Cara Kerja:
          </h1>
          <p>Daftar > Isi Laporan > Verifikasi > Masuk > Lihat hasilnya > Pendampingan (konsultasi)</p>
      </div>

    </div>
  </div>
</div>

@endsection

@push('js')
<script>
  $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
</script>
@endpush