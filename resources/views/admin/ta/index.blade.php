@extends('admin.h&f.master') @section('judul_halaman', 'Tugas Akhir')
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
                    <h6 class="h2 text-white d-inline-block mb-0">Data Tugas Akhir</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard/admin') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tugas Akhir</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a
                        href="{{ url('/dashboard/admin/mahasiswa/ta/create') }}"
                        class="btn btn-sm btn-neutral">Tambah Data Tugas Akhir</a>
                    {{-- <a href="#" class="btn btn-sm btn-neutral">Kelola Tugas Akhir</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
        <div class="col">
            {{-- <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Datatable</h3>
                    <p class="text-sm mb-0">
                        This is an exmaple of datatable using the well known datatables.net plugin. This
                        is a minimal setup in order to get started fast.
                    </p>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div> --}}
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Data Tugas Akhir</h3>
                    <p class="text-sm mb-0">
                        Berikut ini adalah data Tugas Akhir mahasiswa yang ada di Fakultas Ilmu Komputer,
                        UPN "Veteran" Jawa Timur.
                    </p>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-buttons">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>NPM Mahasiswa</th>
                                <th>Jurusan</th>
                                <th>Judul</th>
                                <th>DosPem 1</th>
                                <th>Dospem 2</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>NPM Mahasiswa</th>
                                <th>Jurusan</th>
                                <th>Judul</th>
                                <th>DosPem 1</th>
                                <th>Dospem 2</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Afrizal Muhammad Yasin</td>
                                <td>17081010092</td>
                                <td>Informatika</td>
                                <td>Sistem Informasi Aduan Mahasiswa</td>
                                <td>Ronggo Alit</td>
                                <td>Faisal M</td>
                                <td>
                                    <form action="" onsubmit="return confirm('Hapus data 1 ?')" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button
                                            class="red btn waves-effect waves-light btn-danger"
                                            type="submit"
                                            name="action"
                                            value="PUBLISH">Hapus

                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Afrizal Muhammad Yasin</td>
                                <td>17081010092</td>
                                <td>Informatika</td>
                                <td>Sistem Informasi Akademik Mahasiswa</td>
                                <td>Ronggo Alit</td>
                                <td>Faisal M</td>
                                <td>
                                    <form action="" onsubmit="return confirm('Hapus data 1 ?')" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button
                                            class="red btn waves-effect waves-light btn-danger"
                                            type="submit"
                                            name="action"
                                            value="PUBLISH">Hapus

                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Afrizal Muhammad Yasin</td>
                                <td>17081010092</td>
                                <td>Informatika</td>
                                <td>Sistem Informasi Prestasi Mahasiswa</td>
                                <td>Ronggo Alit</td>
                                <td>Faisal M</td>
                                <td>
                                    <form action="" onsubmit="return confirm('Hapus data 1 ?')" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button
                                            class="red btn waves-effect waves-light btn-danger"
                                            type="submit"
                                            name="action"
                                            value="PUBLISH">Hapus

                                        </button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    @endsection @section('script')
    <!-- Argon Scripts -->
    <!-- Optional JS -->
    <script src="<?php echo asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js')?>"></script>
  <script src="<?php echo asset('assets/js/demo.min.js')?>"></script>

    @endsection
