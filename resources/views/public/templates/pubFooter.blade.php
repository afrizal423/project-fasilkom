  
  <footer>
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
        <div class="col twitter-feed">
          <h3>Umpan Twitter</h3>
          <div class="tweet-content">
            <div class="tweet-item row">
              <i class="fab fa-twitter col-md-1"></i>
              <p class="col">
                The moment an unlimited #antares rocked exploded seconds after launch http://example.com.
                <br>
                <span>15 minutes ago</span>
              </p>
            </div>
  
            <div class="tweet-item row">
              <i class="fab fa-twitter col-md-1"></i>
              <p class="col">
                @NASA & @Orbital Science gathering data on failure #antares rocket bound for international space.
                <br>
                <span>45 minutes ago</span>
              </p>
            </div>
  
            <div class="tweet-item row">
              <i class="fab fa-twitter col-md-1"></i>
              <p class="col">
                Ex-cabinet minister Chris Huhne loses legal challenge over $77,750 court costs incurred in speeding points.
                <br>
                <span>1 day ago</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <h3>Form Kontak</h3>
          <form action="">
            <input type="text" 
                  placeholder="Masukkan nama lengkap">
            <input type="text" 
                  placeholder="Masukkan alamat email">
            <textarea name="pesan" 
                      id="pesanEmail"
                      placeholder="Ketikkan pesan anda disini"></textarea>
            <button type="submit">Kirim</button>
          </form>
        </div>
        <div class="col">
          <h3>Tentang Kami</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, et quae numquam error natus ipsum libero. Perspiciatis, minus in impedit nihil officia ratione ab quasi molestiae voluptas sed similique officiis.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, et quae numquam error natus ipsum libero. Perspiciatis, minus in impedit nihil officia ratione ab quasi molestiae voluptas sed similique officiis.
            <br>
            <br>
            <span id="fasdev">- Fasilkom Dev Team</span>
          </p>
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

  {{-- Custom JS --}}
  <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>