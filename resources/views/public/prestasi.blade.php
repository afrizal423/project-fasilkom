@include('public.templates.pubHeader')

<main class="container my-5">
  <h1 class="text-center">Daftar Prestasi Mahasiswa</h1>
  <div class="text-center">Yang ada di Fakultas Ilmu Komputer</div> <hr>

  <div class="table-responsive">
    <table id="table" class="table">
    <thead class="thead-light">
      <tr>
        <th>No</th>
        <th>Nama Kegiatan/Acara</th>
        <th>Waktu Penyelenggaraan</th>
        <th>Prestasi yang dicapai</th>
        <th>Individu/Tim</th>
        <th>Nama Mahasiswa</th>
        <th>Jurusan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>LKTI</td>
        <td>20 Januari 2015</td>
        <td>Juara 1</td>
        <td>Individu</td>
        <td>Firya Nadhira</td>
        <td>Teknik Informatika</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Tennis Lapangan</td>
        <td>1 September 2019</td>
        <td>Juara 3</td>
        <td>Individu</td>
        <td>Dina Ratnaningtyas</td>
        <td>Sistem Informasi</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Pimnas</td>
        <td>18 Januari 2018</td>
        <td>Juara 2</td>
        <td>Individu</td>
        <td>Muhammad Arif Hakim</td>
        <td>Teknik Informatika</td>
      </tr>
    </tbody>
  </table>
  </div>
</main>

@include('public.templates.pubFooter')
