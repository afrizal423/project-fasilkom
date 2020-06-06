@extends('admin.h&f.master')
@section('judul_halaman', 'Dashboard admin')
@section('konten')
<!-- Header -->

<!-- Header -->

<div class = "header bg-primary pb-6" > <div class="container-fluid">
    <div class="header-body">
        <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Dashboards</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
                <a href="#" class="btn btn-sm btn-neutral">New</a>
                <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
{{-- <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-primary border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Mahasiswa Fasilkom</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">250</span>

                    </div>

                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-info border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Alumni Mahasiswa Fasilkom</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">500</span>

                    </div>

                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-danger border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Mahasiswa Berprestasi</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">200</span>

                    </div>

                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-gradient-default border-0">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Jumlah Data Tugas AKhir mahasiswa</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">230</span>

                    </div>

                </div>
                <p class="mt-3 mb-0 text-sm">
                    <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                </p>
            </div>
        </div>
    </div>
</div> --}}
{{-- </div> --}}
@endsection @section('script-dashboard')

<script>
var SalesChart = (function () {

// Variables

var $chart = $('#mhs-jur');

// Methods

function init($this) {
    var salesChart = new Chart($this, {
        type: 'bar',
        options: {
            scales: {
                yAxes: [
                    {
                        gridLines: {
                            color: Charts
                                .colors
                                .gray[200],
                            zeroLineColor: Charts
                                .colors
                                .gray[200]
                        },
                        ticks: {}
                    }
                ]
            }
        },
        data: {
            labels: [
                'Informatika', 'Sistem Informasi'
            ],
            datasets: [
                {
                    label: 'Jumlah',
                    data: [305, 204]
                }
            ]
        }
    });

    // Save to jQuery object

    $this.data('chart', salesChart);

};

// Events

if ($chart.length) {
    init($chart);
}

})();
</script>
{{-- mhs --}}

<script>
var MahasiswaThnChart = (function () {

// Variables

var $chart = $('#mhs-thn');

// Methods

function init($this) {
    var mahasiswathnChart = new Chart($this, {
        type: 'bar',
        options: {
            scales: {
                yAxes: [
                    {
                        gridLines: {
                            color: Charts
                                .colors
                                .gray[200],
                            zeroLineColor: Charts
                                .colors
                                .gray[200]
                        },
                        ticks: {}
                    }
                ]
            }
        },
        data: {
            labels: [
                '2014',
                '2015',
                '2016',
                '2017',
                '2018',
                '2019'
            ],
            datasets: [
                {
                    label: 'Jumlah',
                    data: [
                        40,
                        70,
                        80,
                        110,
                        140,
                        150
                    ]
                }
            ]
        }
    });

    // Save to jQuery object

    $this.data('chart', mahasiswathnChart);

};

// Events

if ($chart.length) {
    init($chart);
}

})();
</script>

<script>
var MahasiswaPresChart = (function () {

// Variables

var $chart = $('#mhs-pres');

// Methods

function init($this) {
    var mahasiswapresChart = new Chart($this, {
        type: 'line',
        options: {
            scales: {
                yAxes: [
                    {
                        gridLines: {
                            color: Charts
                                .colors
                                .gray[200],
                            zeroLineColor: Charts
                                .colors
                                .gray[200]
                        },
                        ticks: {}
                    }
                ]
            }
        },
        data: {
            labels: [
                '2014',
                '2015',
                '2016',
                '2017',
                '2018',
                '2019'
            ],
            datasets: [
                {
                    label: 'Jumlah',
                    data: [
                        2,
                        5,
                        1,
                        2,
                        1,
                        4
                    ]
                }
            ]
        }
    });

    // Save to jQuery object

    $this.data('chart', mahasiswapresChart);

};

// Events

if ($chart.length) {
    init($chart);
}

})();
</script>

@endsection
