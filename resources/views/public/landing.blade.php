@include('public.templates.pubHeader')

  <main>
    <section id="pengumuman" class="">
      <div class="container">
        <div id="pengumuman-header" class="row">
          <h2 class="section-title col-sm-12 col-md-12 col-lg-9">
            <strong>Pengumuman</strong>
          </h2>
          <nav aria-label="Pengumuman navigation" id="nav-pagination" class="col-sm-5 col-lg-3">
            <ul class="pagination justify-content-xl-end">
              <li class="page-item"><a href="#" class="page-link">Selengkapnya</a></li>
              <li class="page-item"><a href="#" class="page-link"><</a></li>
              <li class="page-item"><a href="#" class="page-link">></a></li>
            </ul>
          </nav>
        </div>
        <div id="pengumuman-item" class="row">
          <ul class="col-sm">
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [18 Sep 2019] <strong>Perpanjangan Beasiswa Muamalat</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [20 Sep 2019] <strong>Panggilan Untuk Calon Penerima Bidikmisi</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Beasiswa Tanoto Foundation Periode 2019/2020</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Penerima Beasiswa Lestari Banten Energi</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [26 Sep 2019] <strong>Beasiswa Unggulan Bank Indonesia</strong>
              </a>
            </li>
          </ul>

          <ul class="col-sm">
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [18 Sep 2019] <strong>Perpanjangan Beasiswa Muamalat</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [20 Sep 2019] <strong>Panggilan Untuk Calon Penerima Bidikmisi</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Beasiswa Tanoto Foundation Periode 2019/2020</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Penerima Beasiswa Lestari Banten Energi</strong>
              </a>
            </li>
            <li>
              <a href="/single">
                <i class="fa fa-bullhorn"></i> [26 Sep 2019] <strong>Beasiswa Unggulan Bank Indonesia</strong>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="events" class="container-fluid">
      <div id="events-content" class="container">
        <h2 class="section-title">Events</h2>
        <div class="event-item row">
          <div class="event-date col-sm-2">
            <span class="date">20</span>
            <span class="month">Juni</span>
          </div>

          <div class="event-preview col-sm-10 col-md-6 mb-3 mb-md-0">
            <h3>Seminar Nasional "Di Balik Tabir Pendidikan"</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="/single">Read more</a>
          </div>

          <div class="event-img col-sm-4 d-none d-md-flex">
            <a href="/single">
              {{-- <img src="{{ asset('images/poster1.jpg') }}" alt=""> --}}
              <div class="hover-preview">
                <div class="hover-content">
                  <span>Seminar Nasional</span>
                  <span>Oleh Fakultas Teknologi</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="event-item row">
          <div class="event-date col-sm-2">
            <span class="date">24</span>
            <span class="month">Juni</span>
          </div>

          <div class="event-preview col-sm-10 col-md-6">
            <h3>Seminar Nasional Saham</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="/single">Read more</a>
          </div>

          <div class="event-img col-sm-4 d-none d-md-flex">
            <a href="/single">
              {{-- <img src="{{ asset('images/poster2.jpg') }}" alt=""> --}}
              <div class="hover-preview">
                <div class="hover-content">
                  <span>Seminar Saham</span>
                  <span>Oleh Fakultas Teknologi</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="event-item row">
          <div class="event-date col-sm-2">
            <span class="date">26</span>
            <span class="month">Juni</span>
          </div>

          <div class="event-preview col-sm-10 col-md-6">
            <h3>Turnamen Tenis Lapangan</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="/single">Read more</a>
          </div>

          <div class="event-img col-sm-4 d-none d-md-flex">
            <a href="/single">
              {{-- <img src="{{ asset('images/poster3.jpg') }}" alt=""> --}}
              <div class="hover-preview">
                <div class="hover-content">
                  <span>Turnamen Tennis</span>
                  <span>Oleh Fakultas Teknologi</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="berita" class="container-fluid">
      <div id="berita-content" class="container">
        <h2 class="section-title"><strong>Berita Terbaru</strong></h2>
        <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
        </div>

        <div class="row no-gutters row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
          <div class="berita-item col p-1 p-md-2">
            <div class="berita-item-content pt-2 pl-2">
              <div class="berita-tag">Health</div>
              <div class="berita-date">30 Agustus 2020</div>
              <a href="/single" class="berita-title">Lorem ipsum dolor sit amet consectetur</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@include('public.templates.pubFooter')
