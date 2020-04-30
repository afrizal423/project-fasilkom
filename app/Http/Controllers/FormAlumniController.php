<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAlumniController extends Controller
{
  function post(Request $request) {
    return response($request->input(), 200)
              ->header('Content-Type', 'text/plain');
  }
}
