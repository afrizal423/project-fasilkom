<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta
            name="description"
            content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>@yield('judul_halaman')</title>
        <!-- Favicon -->
        <link rel="icon" href="<?php echo asset('images/logo.png')?>" sizes="32x32">

        <!-- Fonts -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link
            rel="stylesheet"
            href="<?php echo asset('assets/vendor/nucleo/css/nucleo.css')?>"
            type="text/css">
        <link
            rel="stylesheet"
            href="<?php echo asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')?>"
            type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link
            rel="stylesheet"
            href="<?php echo asset('assets/css/argon.css?v=1.1.0')?>"
            type="text/css">
            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        @yield('header')
    </head>
    <body>
        <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{url('dashboard/admin')}}">
          <img src="{{ asset('images/logo3.png') }}" class="navbar-brand-img" alt="Fasilkom">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            {{-- <li class="nav-item">
              <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              <div class="collapse" id="navbar-dashboards">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/dashboards/dashboard.html" class="nav-link">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/dashboards/alternative.html" class="nav-link">Alternative</a>
                  </li>
                </ul>
              </div>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{url('dashboard/admin')}}">
                  <i class="ni ni-shop text-primary"></i>
                  <span class="nav-link-text">Dashboards</span>
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#navbar-mhs" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-mhs">
                  <i class="ni ni-single-02 text-primary"></i>
                  <span class="nav-link-text">Mahasiswa</span>
                </a>
                <div class="collapse" id="navbar-mhs">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="{{url('dashboard/admin/mahasiswa/datamhs')}}" class="nav-link">Data Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Data PKL</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dashboard/admin/mahasiswa/ta')}}" class="nav-link">Data Skripsi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dashboard/admin/mahasiswa/prestasi')}}" class="nav-link">Data Prestasi</a>
                    </li>
                  </ul>
                </div>
              </li>
        <li class="nav-item">
                <a class="nav-link" href="#navbar-info" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-info">
                  <i class="fas fa-bullhorn text-orange"></i>
                  <span class="nav-link-text">Informasi & Berita</span>
                </a>
                <div class="collapse" id="navbar-info">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item {{ (request()->is('dashboard/admin/news/pengumuman')) ? 'active' : '' }}">
                      <a href="{{url('dashboard/admin/news/pengumuman')}}" class="nav-link">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('dashboard/admin/news/event')}}" class="nav-link">Event</a>
                    </li>
                    <li class="nav-item {{ (request()->is('dashboard/admin/news/berita')) ? 'active' : '' }}">
                        <a href="{{url('dashboard/admin/news/berita')}}" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Agenda</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('dashboard/admin/alumni')}}">
                  <i class="fas fa-address-card text-green"></i>
                  <span class="nav-link-text">Alumni</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-users text-red"></i>
                  <span class="nav-link-text">Ormawa</span>
                </a>
              </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Examples</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/examples/pricing.html" class="nav-link">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/login.html" class="nav-link">Login</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/register.html" class="nav-link">Register</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/lock.html" class="nav-link">Lock</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/timeline.html" class="nav-link">Timeline</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/examples/profile.html" class="nav-link">Profile</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="ni ni-ui-04 text-info"></i>
                <span class="nav-link-text">Components</span>
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/components/buttons.html" class="nav-link">Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/cards.html" class="nav-link">Cards</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/grid.html" class="nav-link">Grid</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/notifications.html" class="nav-link">Notifications</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/icons.html" class="nav-link">Icons</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/components/typography.html" class="nav-link">Typography</a>
                  </li>
                  <li class="nav-item">
                    <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Multi level</a>
                    <div class="collapse show" id="navbar-multilevel" style="">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Third level menu</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">Just another link</a>
                        </li>
                        <li class="nav-item">
                          <a href="#!" class="nav-link ">One last link</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="ni ni-single-copy-04 text-pink"></i>
                <span class="nav-link-text">Forms</span>
              </a>
              <div class="collapse" id="navbar-forms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/forms/elements.html" class="nav-link">Elements</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/forms/components.html" class="nav-link">Components</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/forms/validation.html" class="nav-link">Validation</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="ni ni-align-left-2 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
              <div class="collapse" id="navbar-tables">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/tables/tables.html" class="nav-link">Tables</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/sortable.html" class="nav-link">Sortable</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/datatables.html" class="nav-link">Datatables</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="ni ni-map-big text-primary"></i>
                <span class="nav-link-text">Maps</span>
              </a>
              <div class="collapse" id="navbar-maps">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="../../pages/maps/google.html" class="nav-link">Google</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/maps/vector.html" class="nav-link">Vector</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/widgets.html">
                <i class="ni ni-archive-2 text-green"></i>
                <span class="nav-link-text">Widgets</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/charts.html">
                <i class="ni ni-chart-pie-35 text-info"></i>
                <span class="nav-link-text">Charts</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/calendar.html">
                <i class="ni ni-calendar-grid-58 text-red"></i>
                <span class="nav-link-text">Calendar</span>
              </a>
            </li> --}}
          </ul>
          {{-- <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">Documentation</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
          </ul> --}}
        </div>
      </div>
    </div>
  </nav>
 <!-- Main content -->
 <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{asset('storage/' . Auth::user()->avatar)}}">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->username }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a  class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">


                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('konten')

<!-- Argon Scripts -->
        <!-- Core -->

        <script src="<?php echo asset('assets/vendor/jquery/dist/jquery.min.js')?>"></script>
        <script
            src="<?php echo asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo asset('assets/vendor/js-cookie/js.cookie.js')?>"></script>
        <script
            src="<?php echo asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')?>"></script>
        <script
            src="<?php echo asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')?>"></script>
        <!-- Optional JS -->
        @yield('script')
        <script src="<?php echo asset('assets/vendor/chart.js/dist/Chart.min.js')?>"></script>
        <script
            src="<?php echo asset('assets/vendor/chart.js/dist/Chart.extension.js')?>"></script>
        <script
            src="<?php echo asset('assets/vendor/jvectormap-next/jquery-jvectormap.min.js')?>"></script>
        <script
            src="<?php echo asset('assets/js/vendor/jvectormap/jquery-jvectormap-world-mill.js')?>"></script>
        <!-- Argon JS -->
        <script src="<?php echo asset('assets/js/argon.js?v=1.1.0')?>"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="<?php echo asset('assets/js/demo.min.js')?>"></script>
    </body>

</html>
