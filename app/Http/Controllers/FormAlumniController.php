<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAlumniController extends Controller
{
  function post(Request $request) {
    $data = [
      // Assign form data dari page 1
      "namaLengkap" => $request->input('namaLengkap'),
      "npm" => $this->toString($request->input('npm')),
      "email" => $request->input('email'),
      "noTelp" => $request->input('noTelp'),
      "jenisKelamin" => $request->input('jenisKelamin'),
      "tempatLahir" => $request->input('tempatLahir'),
      "tglLahir" => $request->input('tglLahir'),
      "alamatTinggal" => $request->input('alamatTinggal'),
      "programStudi" => $request->input('programStudi'),
      "bulanYudisium" => $request->input('bulanYudisium'),
      "bulanWisuda" => $request->input('bulanWisuda'),

      // Assign form data dari page 2
      "sudahKerja" => $request->input('sudahKerja'),
      "bulanTerimaKerja" => $this->if_exists($request->input('bulanTerimaKerja')),
      "gajiPertama" => $this->if_exists($request->input('gajiPertama')),
      "namaPerusahaan" => $this->if_exists($request->input('namaPerusahaan')),
      "jabatan" => $this->if_exists($request->input('jabatan')),
      "keteranganJabatan" => $this->if_exists($request->input('ketaranganJabatan')),
      "alamatPerusahaan" => $this->if_exists($request->input('alamatPerusahaan')),
      "emailPerusahaan" => $this->if_exists($request->input('emailPerusahaan')),
      "namaAtasan" => $this->if_exists($request->input('namaAtasan')),
      "jabatanAtasan" => $this->if_exists($request->input('jabatanAtasan')),
      "jenisPerusahaan" => $this->if_exists($request->input('jenisPerusahaan')),
      "ukuranTempatKerja" => $this->if_exists($request->input('ukuranTempatKerja')),

      // Assign form data dari page 3
      "besarMetodePerkuliahan" => $request->input('besarMetodePerkuliahan'),
      "besarMetodeDemonstrasi" => $request->input('besarMetodeDemonstrasi'),
      "besarMetodeProyekRiset" => $request->input('besarMetodeProyekRiset'),
      "besarMetodeMagang" => $request->input('besarMetodeMagang'),
      "besarMetodePraktikum" => $request->input('besarMetodePraktikum'),
      "besarMetodeKerjaLapangan" => $request->input('besarMetodeKerjaLapangan'),
      "besarMetodeDiskusi" => $request->input('besarMetodeDiskusi'),
      "kapanCariKerja" => $request->input('kapanCariKerja'),
      "metodeCariKerja" => $this->if_exists($request->input('metodeCariKerja')),
      "kapanDapatKerja" => $this->if_exists($request->input('kapanDapatKerja')),
      "jumlahPerusahaanSudahDilamar" => $this->if_exists($request->input('jumlahPerusahaanSudahDilamar')),
      "jumlahResponLamaran" => $this->if_exists($request->input('jumlahResponLamaran')),
      "jumlahUndanganWawancara" => $this->if_exists($request->input('jumlahUndanganWawancara')),
      "lanjutKuliah" => $request->input('lanjutKuliah'),
      "lokasiLanjutKuliah" => $this->if_exists($request->input('lokasiLanjutKuliah')),
      "gambaranSituasi" => $request->input('gambaranSituasi'),
      "aktifCariKerja" => $this->if_exists($request->input('aktifCariKerja')),
      "bidangKerja" => $this->if_exists($request->input('bidangKerja')),
      "sumberDanaKuliah" => $request->input('sumberDanaKuliah'),
      "pendapatanUtama" => $this->if_exists($request->input('pendapatanUtama')),
      "pendapatanLembur" => $this->if_exists($request->input('pendapatanLembur')),
      "pendapatanLain" => $this->if_exists($request->input('pendapatanLain')),
      "hubunganStudiKerja" => $this->if_exists($request->input('hubunganStudiKerja')),
      "pendidikanSesuaiPekerjaan" => $this->if_exists($request->input('pendidikanSesuaiPekerjaan')),

    ];

    return (
      response($data, 200)
        ->header('Content-Type', 'text/plain')
    );
  }

  private function toString($input) {
    return strval($input);
  }

  private function if_exists($input) {
    return (
      $input 
      && $input != "" 
      && $input != null
    ) ? $input : "-";
  }
}
