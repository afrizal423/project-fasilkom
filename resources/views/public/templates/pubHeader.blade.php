<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | FIK - UPN "Veteran" Jawa Timur</title>

    <!-- Bootstrap.css CDN -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" sizes="32x32">

    {{-- DataTables
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css"> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  </head>


<body class="container-fluid">

  <header @if(Request::is('/')) class="vh-100 overflow-hidden" @else class="bg-dark w-auto" @endif >
    <nav class="navbar navbar-expand-lg container-fluid">
      <div class="container">
        <a href="#" class="navbar-brand">
          <img src="{{ asset('images/logo2.png') }}" alt="Logo UPN 'Veteran Jawa Timur'">
        </a>

        <button type="button"
                class="navbar-toggler"
                data-toggle="collapse"
                data-target="#navbarNavCollapse" aria-controls="navbarNavCollapse"
                aria-expanded="false"
                aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavCollapse">
          <ul class="navbar-nav ml-auto" id="navbarCollapse">
            <li class="nav-item">
              <a href="/" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" id="navbarDropdown"
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">Pengumuman
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="" class="dropdown-item">PKM</a>
                <a href="" class="dropdown-item">Lowongan</a>
                <a href="" class="dropdown-item">Kewirausahaan</a>
                <a href="" class="dropdown-item">Beasiswa</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="ormawa.html" class="nav-link">Ormawa</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#"
                  id="navbarDropdown"
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false">PKL
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="" class="dropdown-item">Informatika</a>
                <a href="" class="dropdown-item">Sistem Informasi</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="tugasakhir.html"
                class="nav-link">
                Tugas Akhir
              </a>
            </li>
            <li class="nav-item">
              <a href="/prestasi" class="nav-link {{ (request()->is('prestasi')) ? 'active' : '' }}">Prestasi</a>
            </li>
            <li class="nav-item">
              <a href="http://ikatifa.org" class="nav-link">Alumni</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @if(Request::is('/'))
      {{-- <img
        src="{{ asset('images/banner2.jpeg') }}"
        alt="Gedung 2 Fakultas Ilmu Komputer"
        class="banner"> --}}

      <div id="banner-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#banner-carousel" data-slide-to="1"></li>
          <li data-target="#banner-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-img-container">
              {{-- <img src="{{ asset('images/banner2.jpeg') }}" alt="Gedung 2 Fakultas Ilmu Komputer" class="d-block img-fluid"> --}}
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-img-container">
              {{-- <img src="{{ asset('images/banner2.jpeg') }}" alt="Gedung 2 Fakultas Ilmu Komputer" class="d-block img-fluid"> --}}
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-img-container">
              {{-- <img src="{{ asset('images/banner2.jpeg') }}" alt="Gedung 2 Fakultas Ilmu Komputer" class="d-block img-fluid"> --}}
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    @endif
    
  </header>
