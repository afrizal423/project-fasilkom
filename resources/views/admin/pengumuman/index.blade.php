@extends('admin.h&f.master') @section('judul_halaman', 'Pengumuman')
@section('header')
<!-- Page plugins -->
<link
    rel="stylesheet"
    href="<?php echo asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>">
<link
    rel="stylesheet"
    href="<?php echo asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>">
<link
    rel="stylesheet"
    href="<?php echo asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>">
@endsection @section('konten')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Data Pengumuman</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard/admin') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('/dashboard/admin/news/pengumuman/create') }}" class="btn btn-sm btn-neutral">Tambah Pengumuman</a>
                    <a href="{{ url('/dashboard/admin/news/pengumuman/manage') }}" class="btn btn-sm btn-neutral">Kelola Pengumuman</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        @foreach ($info as $inf)
        <div class="col-lg-4">
            <div class="card" style="">
                <img
                    class="card-img-top"
                    src="{{asset('storage/' . $inf->gambar)}}"
                    alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title">{{ $inf->judul }}</h3>
                    <p class="card-text">{!!Str::words($inf->konten, 15)
                        !!}</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Argon Scripts -->
    @endsection @section('script')
    <!-- Argon Scripts -->
    <!-- Optional JS -->
    <script src="../../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script
        src="../../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script
        src="../../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script
        src="../../assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script
        src="../../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script
        src="../../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script
        src="../../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script
        src="../../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="<?php echo asset('assets/js/demo.min.js')?>"></script>

    @endsection
