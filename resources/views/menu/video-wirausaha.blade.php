@extends('layouts.user')

@section('navbar-brand')
<div class="navbar-wrapper">
    <a class="navbar-brand" href="#">Video Berwirausaha</a>
</div>
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-body">
                        <h4 class="card-title">Cara Berjualan Online</h4>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/1EZVMsP1mas" allowfullscreen>
                        </iframe>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-body">
                        <h4 class="card-title">Cara Berjualan Online</h4>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/1OCxW9sSlGo" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-body">
                        <h4 class="card-title">Cara Berjualan Online</h4>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/uWekEf7arzI" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-body">
                        <h4 class="card-title">Cara Berjualan Online</h4>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/RL1mbazIYK4" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-body">
                        <h4 class="card-title">Cara Berjualan Online</h4>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/KvZXLJ8vXj8" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-body">
                        <h4 class="card-title">Cara Berjualan Online</h4>
                        <iframe width="350" height="200" src="https://www.youtube.com/embed/h3WIep281Kw" allowfullscreen>
                        </iframe>
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