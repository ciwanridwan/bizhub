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
              <img src="{{ asset('material/img/BNI-logo.jpg')}}" style="width: 300px; height: 300px; border-radius: 50%;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
              <img src="{{ asset('material/img/logo-bca.jpg')}}" style="width: 300px; height: 300px; border-radius: 50%;" >
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
                <img src="{{ asset('material/img/mandiri-logo.jpg')}}" style="width: 300px; height: 300px; border-radius: 50%;">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <img src="{{ asset('material/img/logo-bri.jpg')}}" style="width: 300px; height: 300px; border-radius: 50%;">
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