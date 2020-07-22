@extends('layouts.user')

@section('navbar-brand')
<div class="navbar-wrapper">
    <a class="navbar-brand" href="#">Akses Ecommerce</a>
</div>
@endsection

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-chart">
          <div class="card-body" style="border-radius: 0%">
            <h4 class="card-title" style="text-align: center">BLIBLI</h4>
            <img src="{{ asset('material/img/blibli.jpg')}}" style="width: 250px; height: 200px; border-radius: 50%;">
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-chart">
          <div class="card-body" style="border-radius: 0%">
            <h4 class="card-title" style="text-align: center">BUKALAPAK</h4>
            <img src="{{ asset('material/img/bukalapak.jpg')}}" style="width: 250px; height: 200px; border-radius: 50%;">
          </div>
        </div>
              
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-chart">
          <div class="card-body" style="border-radius: 0%">
            <h4 class="card-title" style="text-align: center">TOKOPEDIA</h4>
            <img src="{{ asset('material/img/tokopedia--1200x675.jpg')}}" style="width: 200px; height: 200px;">
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