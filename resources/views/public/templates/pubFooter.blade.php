  
  <footer>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
        <div class="col px-3 mb-4 mb-sm-4 mb-md-0">
          <div class="footer-col-content pt-3">
            <h3>Umpan Twitter</h3>
            <a class="twitter-timeline" 
                data-height="300" 
                data-theme="light" 
                href="https://twitter.com/upnveteranjatim?ref_src=twsrc%5Etfw">
              Tweets by upnveteranjatim
            </a> 
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
        <div class="col px-3 mb-4 mb-sm-4 mb-md-0">
          <div class="footer-col-content pt-3">
            <h3>Form Kontak</h3>
            <form action="" class="footer-form">
              <input type="text" placeholder="Nama Lengkap Anda">
              <input type="text" placeholder="Email Anda">
              <textarea name="footer-message" id="footer-message" class="d-block" placeholder="Pesan anda"></textarea>
              <button type="submit">Kirim</button>
            </form>
          </div>
        </div>
        <div class="col px-3">
          <div class="footer-col-content pt-3 tentang-kami">
            <h3>Tentang Kami</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum illo cumque, delectus voluptatum facilis sapiente quae et porro nam dicta nostrum. Minus laborum blanditiis adipisci praesentium voluptates non facilis deserunt!
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum illo cumque, delectus voluptatum facilis sapiente quae et porro nam dicta nostrum. Minus laborum blanditiis adipisci praesentium voluptates non facilis deserunt!
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum illo cumque, delectus voluptatum facilis sapiente quae et porro nam dicta nostrum. Minus laborum blanditiis adipisci praesentium voluptates non facilis deserunt!
              <br><br>
              <span> - Fasilkom DEV Team</span>
            </p>
          </div>
        </div>
      </div>

      <div class="copyright row">
        <h4 class="col">
          &copy; 2020 Dev Team Fakultas Ilmu Komputer UPN Jatim
        </h4>
      </div>
    </div>
  </footer>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <!-- Popper.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <!-- Bootstrap.js CDN -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  {{-- DataTables --}}
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <script src="{{ mix('/js/app.js') }}"></script>
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <script src="https://surveyjs.azureedge.net/1.7.7/survey.jquery.min.js"></script>

  {{-- Custom JS --}}
  <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>