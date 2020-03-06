@include('public.templates.pubHeader', ['active' => 'pengumuman'])

<div class="container my-5">
  <h1 class="mb-4">Pengumuman</h1>
  <div class="pengumuman-content">
    <div class="pengumuman-item row">
      <div class="col-sm-3">
        <div class="pengumuman-item-img"></div>
      </div>
      
      <div class="pengumuman-item-content col-sm-9">
        <h2 class="pengumuman-item-title"><a href="#">Beasiswa Straya Language Institute</a></h2>
        <div class="article-meta">
          <address>By <a href="#" rel="author">Elizabeth Malkin</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
        </div>
        <p>
          Sebelum pendaftaran beasiswa ini berakhir, silakan mengajukan lamaran sesuai beasiswa yang Anda pilih. Biasanya pendaftaran dilakukan secara online yang mewajibkan Anda memiliki akun pada laman beasiswa yang dituju. Segera cek masing-masing persyaratannya. <br>
          <a href="#" class="read-more">Read More</a>
        </p>
      </div>
    </div>
    
    <div class="pengumuman-item row">
      <div class="col-sm-3">
        <div class="pengumuman-item-img"></div>
      </div>
      
      <div class="pengumuman-item-content col-sm-9">
        <h2 class="pengumuman-item-title"><a href="#">Pembukaan Penerimaan PKM</a></h2>
        <div class="article-meta">
          <address>By <a href="#" rel="author">James Smith</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
        </div>
        <p>
          Direktorat Jenderal Pembelajaran dan Kemahasiswaan, Kementerian Pendidikan dan Kebudayaan akan menyelenggarakan Program Kreativitas Mahasiswa (PKM) pelaksanaan tahun 2020, bersama ini kami memberi kesempatan kepada mahasiswa untuk mengajukan proposal PKM 5 Bidang <br>
          <a href="#" class="read-more">Read More</a>
        </p>
      </div>
    </div>

    <div class="pengumuman-item row">
      <div class="col-sm-3">
        <div class="pengumuman-item-img"></div>
      </div>
      
      <div class="pengumuman-item-content col-sm-9">
        <h2 class="pengumuman-item-title"><a href="#">Beasiswa Bakti BCA</a></h2>
        <div class="article-meta">
          <address>By <a href="#" rel="author">Michael Drew</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
        </div>
        <p>
          Pendaftaran online melalui ditmawa.bca.ac.id berkas lamaran dikirim ke direktorat kemahasiswaan UPN <br>
          <a href="#" class="read-more">Read More</a>
        </p>
      </div>
    </div>

    <div class="pengumuman-item row">
      <div class="col-sm-3">
        <div class="pengumuman-item-img"></div>
      </div>
      
      <div class="pengumuman-item-content col-sm-9">
        <h2 class="pengumuman-item-title"><a href="#">Lowongan Pekerjaan Dinas Kominfo Surabaya</a></h2>
        <div class="article-meta">
          <address>By <a href="#" rel="author">Elizabeth Malkin</a></address> | <time pubdate datetime="">31 - 12 - 2015</time>
        </div>
        <p>
          Cara Pendaftaran Berkas lamaran ditujukan kepada Sekretariat Dinas Komunikasi dan Informatika Kota Surabaya Jl. Jimerto No 25-27 Lt. V Surabaya Surat lamaran dikirim langsung ke Kantor Dinas Komunikasi dan Informatika Kota Surabaya (tidak boleh melalui POS) <br>
          <a href="#" class="read-more">Read More</a>
        </p>
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item disabled"><a class="page-link" href="#" aria-disabled="true">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
</div>

@include('public.templates.pubFooter')