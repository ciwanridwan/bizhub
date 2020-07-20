@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="dailySalesChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Perkembangan Omset</h4>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> update 4 menit yang lalu
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Perkembangan Jumlah Karyawan</h4>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> pencapaian 2 hari yang lalu
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-chart">
          <div class="card-header card-header-danger">
            <div class="ct-chart" id="completedTasksChart"></div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Perkembangan Kas Usaha</h4>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">access_time</i> perkembangan kas usaha satu hari yang lalu
            </div>
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