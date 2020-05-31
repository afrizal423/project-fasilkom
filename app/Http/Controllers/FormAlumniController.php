<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAlumniController extends Controller
{
  function post(Request $request) {
    $data = array(
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


      // Assign form data dari page 3
    );

    return (
      response($data, 200)
        ->header('Content-Type', 'text/plain')
    );
  }

  private function toString($input) {
    return strval($input);
  }
}
