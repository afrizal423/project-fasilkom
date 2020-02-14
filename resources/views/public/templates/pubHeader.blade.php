<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fakultas Ilmu Komputer | UPN "Veteran" Jawa Timur</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- Favicons-->
  <link rel="icon" href="{{ asset('images/logo.png') }}" sizes="32x32">
</head>
<body class="container-fluid">

  <header>
    <nav class="navbar navbar-expand-lg">
      <a href="#" class="navbar-brand">
        <img src="{{ asset('images/logo2.png') }}" alt="Logo UPN 'Veteran Jawa Timur'">
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavCollapse" aria-controls="navbarNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavCollapse">
        <ul class="navbar-nav ml-auto" id="navbarCollapse">
          <li class="nav-item">
            <a href="index.html" class="nav-link active">Beranda</a>
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
          <li class="nav-item"><a href="ormawa.html" class="nav-link">Ormawa</a></li>
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
            <a href="prestasi.html" class="nav-link">Prestasi</a>
          </li>
          <li class="nav-item">
            <a href="http://ikatifa.org" class="nav-link">Alumni</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Kontak Kami</a>
          </li>
        </ul>
      </div>
    </nav>

    <img src="{{ asset('images/banner2.jpeg') }}" alt="Gedung 2 Fakultas Ilmu Komputer" class="banner">
  </header>
