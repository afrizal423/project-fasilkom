@include('public.templates.pubHeader')
<main class = "container my-5" > <h1 class="text-center">Daftar Tugas Akhir Mahasiswa</h1>
<div class="text-center">Yang ada di Fakultas Ilmu Komputer</div> <hr > <div class="table-responsive">
    <table id="table" class="table">
        <thead class="thead-light">
            <tr>
                <th>Nama Mahasiswa</th>
                <th>NPM Mahasiswa</th>
                <th>Jurusan</th>
                <th>Judul</th>
                <th>DosPem 1</th>
                <th>Dospem 2</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Afrizal Muhammad Yasin</td>
                <td>17081010092</td>
                <td>Informatika</td>
                <td>Sistem Informasi Aduan Mahasiswa</td>
                <td>Ronggo Alit</td>
                <td>Faisal M</td>
            </tr>
            <tr>
                <td>Afrizal Muhammad Yasin</td>
                <td>17081010092</td>
                <td>Informatika</td>
                <td>Sistem Informasi Akademik Mahasiswa</td>
                <td>Ronggo Alit</td>
                <td>Faisal M</td>
            </tr>
            <tr>
                <td>Afrizal Muhammad Yasin</td>
                <td>17081010092</td>
                <td>Informatika</td>
                <td>Sistem Informasi Prestasi Mahasiswa</td>
                <td>Ronggo Alit</td>
                <td>Faisal M</td>
            </tr>
        </tbody>
    </table>
</div> </main>

@include('public.templates.pubFooter')
