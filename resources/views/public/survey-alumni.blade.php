@include('public.templates.pubHeader')
  
  <main class="container-fluid mt-3">
    <div class="container">
      <h1>Form Alumni</h1>
      <form action="/survey" method="POST" class="swiper-container">
        @csrf
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input 
                class="form-control"
                type="text" 
                name="nama" 
                id="nama" >
            </div>
            <div class="form-group">
              <label for="npm">NPM</label>
              <input 
                class="form-control"
                type="number" 
                name="npm" 
                id="npm" >
            </div>
            <div class="form-group">
              <label for="email">Alamat Email</label>
              <input 
                class="form-control"
                type="email" 
                name="email" 
                id="email" >
            </div>
            <div class="form-group">
              <label for="notelp">Nomor Telepon</label>
              <input 
                class="form-control"
                type="tel" 
                name="notelp" 
                id="notelp" >
            </div>
            <fieldset class="form-group">
              <legend>Jenis Kelamin</legend>
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="jenisKelamin"
                  id="lakiRadio"
                  value="laki">
                <label for="lakiRadio" class="form-check-label">
                  Laki - laki
                </label>
              </div>
    
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="jenisKelamin"
                  id="perempuanRadio"
                  value="perempuan">
                <label for="perempuanRadio" class="form-check-label">
                  Perempuan
                </label>
              </div>
            </fieldset>
            <div class="form-group">
              <label for="tempatLahir">Tempat Lahir</label>
              <input 
                class="form-control"
                type="text" 
                name="tempatLahir" 
                id="tempatLahir" >
            </div>
            <div class="form-group">
              <label for="tglLahir">Tanggal Lahir</label>
              <input 
                class="form-control"
                type="date" 
                name="tglLahir" 
                id="tglLahir" >
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Tinggal</label>
              <input 
                class="form-control"
                type="text" 
                name="alamat" 
                id="alamat" >
            </div>
            <div class="form-group">
              <label for="programStudi">Program Studi</label>
              <select name="programStudi" id="programStudi" class="form-control">
                <option value="" disabled selected>Harap pilih...</option>
                <optgroup label="Fakultas Ilmu Komputer">
                  <option>S1 Informatika</option>
                  <option>S1 Sistem Informasi</option>
                  {{-- <option value="Data Sains">S1 Data Sains</option> --}}
                </optgroup>
                <optgroup label="Fakultas Hukum">
                  <option>S1 Ilmu Hukum</option>
                </optgroup>
                <optgroup label="Fakultas Teknik">
                  <option>S1 Teknik Kimia</option>
                  <option>S1 Teknik Industri</option>
                  <option>S1 Teknik Pangan</option>
                  <option>S1 Teknik Lingkungan</option>
                  <option>S1 Teknik Sipil</option>
                </optgroup>
                <optgroup label="Fakultas Arsitektur & Desain">
                  <option>S1 Arsitektur</option>
                  <option>S1 Desain Komunikasi Visual</option>
                </optgroup>
                <optgroup label="Fakultas Ekonomi & Bisnis">
                  <option>S1 Manajemen</option>
                  <option>S1 Ekonomi Pembangunan</option>
                  <option>S1 Akuntansi</option>
                </optgroup>
                <optgroup label="Fakultas Ilmu Sosial & Politik">
                  <option>S1 Ilmu Komunikasi</option>
                  <option>S1 Ilmu Administrasi Bisnis</option>
                  <option>S1 Ilmu Administrasi Negara</option>
                  <option>S1 Hubungan Internasional</option>
                </optgroup>
                <optgroup label="Fakultas Pertanian">
                  <option>S1 Agroteknologi</option>
                  <option>S1 Agribisnis</option>
                </optgroup>
                <optgroup label="Program Pascasarjana">
                  <option>S2 Akuntansi</option>
                  <option>S2 Agribisnis</option>
                  <option>S2 Manajemen</option>
                  <option>S2 Agroteknologi</option>
                  <option>S2 Ilmu Lingkungan</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group">
              <label for="blnYudisium">Bulan dan Tahun Yudisium</label>
              <input 
                class="form-control"
                type="month" 
                name="blnYudisium" 
                id="blnYudisium" >
            </div>
            <div class="form-group">
              <label for="blnWisuda">Bulan dan Tahun Wisuda</label>
              <input 
                class="form-control"
                type="month" 
                name="blnWisuda" 
                id="blnWisuda" >
            </div>
          </div>
          <div class="swiper-slide">
            <fieldset class="form-group">
              <legend>Apakah anda sudah bekerja?</legend>
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="sudahBekerja"
                  id="sudahRadio"
                  value="sudah-sedang">
                <label for="sudahRadio" class="form-check-label">
                  Sudah / Sedang Bekerja
                </label>
              </div>
    
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="sudahBekerja"
                  id="resignRadio"
                  value="resign-pernah">
                <label for="resignRadio" class="form-check-label">
                  Resign / Pernah Bekerja
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="sudahBekerja"
                  id="belumKerjaRadio"
                  value="belum">
                <label for="belumKerjaRadio" class="form-check-label">
                  Belum Bekerja
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="sudahBekerja"
                  id="wirausahaRadio"
                  value="wirausaha">
                <label for="wirausahaRadio" class="form-check-label">
                  Wirausaha
                </label>
              </div>
            </fieldset>

            <div class="form-group">
              <label for="blnTerimaKerja">Bulan dan Tahun Diterima Bekerja Pertama Kali</label>
              <input 
                class="form-control"
                type="month" 
                name="blnTerimaKerja" 
                id="blnTerimaKerja" >
            </div>

            <div class="form-group">
              <label for="gajiPertama">Berapa Gaji Pertama Anda</label>
              <select name="gajiPertama" id="gajiPertama" class="form-control">
                <option value="" disabled selected>Harap pilih...</option>
                <option value="-2">< 2jt</option>
                <option value="2--5">2jt s.d. < 5jt</option>
                <option value="5--10">5jt s.d. < 10jt</option>
                <option value="10+">>= 10jt</option>
              </select>
            </div>

            <div class="form-group">
              <label for="namaPerusahaan">Nama Perusahaan (Saat ini / yang terakhir anda bekerja)</label>
              <input 
                class="form-control"
                type="text" 
                name="namaPerusahaan" 
                id="namaPerusahaan" >
            </div>

            <div class="form-group">
              <label for="jenisPosisi">Jenis Posisi / Jabatan (Saat ini / yang terakhir anda bekerja)</label>
              <select name="jenisPosisi" id="jenisPosisi" class="form-control">
                <option value="" disabled selected>Harap pilih...</option>
                <option>Komisioner</option>
                <option>Direktur</option>
                <option>Manajer</option>
                <option>Kepala Bagian</option>
                <option>Staff</option>
                <option>Pemilik (Wirausaha)</option>
                <option>Lainnya</option>
              </select>
            </div>

            <div class="form-group">
              <label for="keteranganJabatan">Keterangan lain posisi / jabatan</label>
              <input 
                class="form-control"
                type="text" 
                name="keteranganJabatan" 
                id="keteranganJabatan" >
            </div>
            
            <div class="form-group">
              <label for="alamatPerusahaan">Alamat Perusahaan</label>
              <input 
                class="form-control"
                type="address" 
                name="alamatPerusahaan" 
                id="alamatPerusahaan" >
            </div> 

            <div class="form-group">
              <label for="emailPerusahaan">Email Perusahaan / HRD</label>
              <input 
                class="form-control"
                type="text" 
                name="emailPerusahaan" 
                id="emailPerusahaan" >
            </div> 

            <fieldset class="form-group">
              <legend>Jenis Perusahaan</legend>
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="jenisPerusahaan"
                  id="instansiRadio"
                  value="instansi-bumn">
                <label for="instansiRadio" class="form-check-label">
                  Instansi pemerintah (termasuk BUMN)
                </label>
              </div>
    
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="jenisPerusahaan"
                  id="nonprofitRadio"
                  value="nonprofit-swadaya">
                <label for="nonprofitRadio" class="form-check-label">
                  Organisasi non-profit / Lembaga swadaya masyarakat
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="jenisPerusahaan"
                  id="swastaRadio"
                  value="swasta">
                <label for="swastaRadio" class="form-check-label">
                  Perusahaan swasta
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="jenisPerusahaan"
                  id="tidakjawabRadio"
                  value="internasional">
                <label for="tidakjawabRadio" class="form-check-label">
                  Internasional
                </label>
              </div>
            </fieldset>

            <fieldset class="form-group">
              <legend>Tingkat / Ukuran Tempat Kerja</legend>
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="ukuranTempatKerja"
                  id="lokalRadio"
                  value="lokal">
                <label for="lokalRadio" class="form-check-label">
                  Lokal / Berwirausaha Tidak Berizin
                </label>
              </div>
    
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="ukuranTempatKerja"
                  id="nasionalRadio"
                  value="nasional">
                <label for="nasionalRadio" class="form-check-label">
                  Nasional / Berwirausaha yang Berizin
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="ukuranTempatKerja"
                  id="multinasionalRadio"
                  value="multinasional">
                <label for="multinasionalRadio" class="form-check-label">
                  Multinasional
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="ukuranTempatKerja"
                  id="internasionalRadio"
                  value="internasional">
                <label for="internasionalRadio" class="form-check-label">
                  Internasional
                </label>
              </div>
            </fieldset>

            <div class="form-group">
              <label for="namaAtasan">Nama Atasan</label>
              <input 
                class="form-control"
                type="text" 
                name="namaAtasan" 
                id="namaAtasan" >
            </div> 

            <div class="form-group">
              <label for="jabatanAtasan">Jabatan Atasan</label>
              <input 
                class="form-control"
                type="text" 
                name="jabatanAtasan" 
                id="jabatanAtasan" >
            </div> 
          </div>
          <div class="swiper-slide">
            <fieldset class="form-group">
              <legend>Menurut anda seberapa besar metode pembelajaran perkuliahan yang dilaksanakan di program studi anda?</legend>
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPerkuliahan"
                  id="1kuliah"
                  value="1">
                <label for="1kuliah" class="form-check-label">
                  [1] Sangat Besar
                </label>
              </div>
    
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPerkuliahan"
                  id="2kuliah"
                  value="2">
                <label for="2kuliah" class="form-check-label">
                  [2] Besar
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPerkuliahan"
                  id="3kuliah"
                  value="3">
                <label for="3kuliah" class="form-check-label">
                  [3] Cukup Besar
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPerkuliahan"
                  id="4kuliah"
                  value="4">
                <label for="4kuliah" class="form-check-label">
                  [4] Kurang
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPerkuliahan"
                  id="5kuliah"
                  value="5">
                <label for="5kuliah" class="form-check-label">
                  [5] Tidak sama sekali
                </label>
              </div>
            </fieldset>

            <fieldset class="form-group">
              <legend>Menurut anda seberapa besar metode pembelajaran demonstrasi yang dilaksanakan di program studi anda?</legend>
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarDemonstrasi"
                  id="1demo"
                  value="1">
                <label for="1demo" class="form-check-label">
                  [1] Sangat Besar
                </label>
              </div>
    
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarDemonstrasi"
                  id="2demo"
                  value="2">
                <label for="2demo" class="form-check-label">
                  [2] Besar
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarDemonstrasi"
                  id="3demo"
                  value="3">
                <label for="3demo" class="form-check-label">
                  [3] Cukup Besar
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarDemonstrasi"
                  id="4demo"
                  value="4">
                <label for="4demo" class="form-check-label">
                  [4] Kurang
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarDemonstrasi"
                  id="5demo"
                  value="5">
                <label for="5demo" class="form-check-label">
                  [5] Tidak sama sekali
                </label>
              </div>
            </fieldset>

            <fieldset class="form-group">
              <legend>Menurut anda seberapa besar metode pembelajaran partisipasi dalam proyek riset yang dilaksanakan di program studi anda?</legend>
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPartisipasiRiset"
                  id="1riset"
                  value="1">
                <label for="1riset" class="form-check-label">
                  [1] Sangat Besar
                </label>
              </div>
    
              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPartisipasiRiset"
                  id="2riset"
                  value="2">
                <label for="2riset" class="form-check-label">
                  [2] Besar
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPartisipasiRiset"
                  id="3riset"
                  value="3">
                <label for="3riset" class="form-check-label">
                  [3] Cukup Besar
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPartisipasiRiset"
                  id="4riset"
                  value="4">
                <label for="4riset" class="form-check-label">
                  [4] Kurang
                </label>
              </div>

              <div class="form-check">
                <input type="radio" 
                  class="form-check-input" 
                  name="besarPartisipasiRiset"
                  id="5riset"
                  value="5">
                <label for="5riset" class="form-check-label">
                  [5] Tidak sama sekali
                </label>
              </div>
            </fieldset>
          </div>
          
        </div>
        <input type="submit" value="Submit">
      </form>
    </div>
  </main>

@include('public.templates.pubFooter')