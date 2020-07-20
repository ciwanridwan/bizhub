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
              <img src="/material/img/blibli.jpg" style="width: 300px; height: 300px; border-radius: 50%;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="/material/img/bukalapak.jpg" style="width: 300px; height: 300px; border-radius: 50%;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="material/img/tokopedia--1200x675.jpg" style="width: 300px; height: 300px; border-radius: 50%;">
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