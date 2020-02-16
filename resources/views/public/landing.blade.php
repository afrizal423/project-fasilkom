@include('public.templates.pubHeader')

  <main>
    <section id="pengumuman" class="">
      <div class="container">
        <div id="pengumuman-header" class="row">
          <h2 class="col-9">Pengumuman</h2>
          <nav aria-label="Pengumuman navigation" id="nav-pagination">
            <ul class="pagination">
              <li class="page-item"><a href="#" class="page-link">Selengkapnya</a></li>
              <li class="page-item"><a href="#" class="page-link"><</a></li>
              <li class="page-item"><a href="#" class="page-link">></a></li>
            </ul>
          </nav>
        </div>
        <div id="pengumuman-item" class="row">
          <ul class="col-sm">
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [18 Sep 2019] <strong>Perpanjangan Beasiswa Muamalat</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [20 Sep 2019] <strong>Panggilan Untuk Calon Penerima Bidikmisi</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Beasiswa Tanoto Foundation Periode 2019/2020</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Penerima Beasiswa Lestari Banten Energi</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i>[26 Sep 2019] <strong>Beasiswa Unggulan Bank Indonesia</strong>
              </a>
            </li>
          </ul>

          <ul class="col-sm">
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [18 Sep 2019] <strong>Perpanjangan Beasiswa Muamalat</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [20 Sep 2019] <strong>Panggilan Untuk Calon Penerima Bidikmisi</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Beasiswa Tanoto Foundation Periode 2019/2020</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [21 Sep 2019] <strong>Penerima Beasiswa Lestari Banten Energi</strong>
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-bullhorn"></i> [26 Sep 2019] <strong>Beasiswa Unggulan Bank Indonesia</strong>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="events" class="container-fluid">
      <div id="events-content" class="container">
        <h2>Events</h2>
        <div class="event-item row">
          <div class="event-date col-sm-2">
            <span class="date">20</span>
            <span class="month">Juni</span>
          </div>

          <div class="event-preview col-sm-6">
            <h3>Seminar Nasional "Di Balik Tabir Pendidikan"</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="">Read more</a>
          </div>

          <div class="event-img col-sm-3">
            <a href="">
              <img src="{{ asset('images/poster1.jpg') }}" alt="">
              <div class="hover-preview">

              </div>
            </a>
          </div>
        </div>

        <div class="event-item row">
          <div class="event-date col-sm-2">
            <span class="date">24</span>
            <span class="month">Juni</span>
          </div>

          <div class="event-preview col-sm-6">
            <h3>Seminar Nasional Saham</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="">Read more</a>
          </div>

          <div class="event-img col-sm-3">
            <a href="">
              <img src="{{ asset('images/poster2.jpg') }}" alt="">
              <div class="hover-preview">

              </div>
            </a>
          </div>
        </div>

        <div class="event-item row">
          <div class="event-date col-sm-2">
            <span class="date">26</span>
            <span class="month">Juni</span>
          </div>

          <div class="event-preview col-sm-6">
            <h3>Turnamen Tenis Lapangan</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="">Read more</a>
          </div>

          <div class="event-img col-sm-3">
            <a href="">
              <img src="{{ asset('images/poster3.jpg') }}" alt="">
              <div class="hover-preview">

              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="berita" class="container-fluid">
      <div id="berita-content" class="container">
        <h2>Berita</h2>
        <div>
          <div class="berita-item"></div>
          <div class="berita-item"></div>
          <div class="berita-item"></div>
          <div class="berita-item"></div>
          <div class="berita-item"></div>
          <div class="berita-item"></div>
          <div class="berita-item"></div>
          <div class="berita-item"></div>
        </div>
      </div>
    </section>
  </main>

@include('public.templates.pubFooter')
