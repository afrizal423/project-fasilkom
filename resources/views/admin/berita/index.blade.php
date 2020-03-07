@extends('admin.h&f.master') @section('judul_halaman', 'Berita')
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
                    <h6 class="h2 text-white d-inline-block mb-0">Data Berita</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard/admin') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Berita</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ url('/dashboard/admin/news/berita/create') }}" class="btn btn-sm btn-neutral">Tambah Berita</a>
                    <a href="#" class="btn btn-sm btn-neutral">Kelola Berita</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="">
                <img
                    class="card-img-top"
                    src="https://m.ayobandung.com/images-bandung/post/articles/2020/01/13/76173/logo_google.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="">
                <img
                    class="card-img-top"
                    src="https://m.ayobandung.com/images-bandung/post/articles/2020/01/13/76173/logo_google.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="">
                <img
                    class="card-img-top"
                    src="https://m.ayobandung.com/images-bandung/post/articles/2020/01/13/76173/logo_google.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
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
