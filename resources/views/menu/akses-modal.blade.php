@extends('layouts.user')

@section('navbar-brand')
<div class="navbar-wrapper">
  <a class="navbar-brand" href="#">Akses Modal</a>
</div>

@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-chart">
          <div class="card-body" style="border-radius: 0%">
            <h4 class="card-title" style="text-align: center">BANK BNI</h4>
            <img src="{{ asset('material/img/BNI-logo.jpg')}}" style="width: 250px; height: 200px;">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-chart">
          <div class="card-body" style="border-radius: 0%">
            <h4 class="card-title" style="text-align: center">BANK BCA</h4>
            <img src="{{ asset('material/img/logo-bca.jpg')}}" style="width: 250px; height: 200px;">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-chart">
          <div class="card-body" style="border-radius: 0%">
            <h4 class="card-title" style="text-align: center">BANK MANDIRI</h4>
            <img src="{{ asset('material/img/mandiri-logo.jpg')}}" style="width: 250px; height: 200px; border-radius: 50%;">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-chart">
          <div class="card-body" style="border-radius: 0%">
            <h4 class="card-title" style="text-align: center">BANK BRI</h4>
            <img src="{{ asset('material/img/logo-bri.jpg')}}" style="width: 250px; height: 200px; border-radius: 50%;">
          </div>
        </div>
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