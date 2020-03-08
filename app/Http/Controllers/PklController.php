<?php

namespace App\Http\Controllers;

use App\Pkl;
use Illuminate\Http\Request;

class PklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.pkl.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pkl.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pkl  $pkl
     * @return \Illuminate\Http\Response
     */
    public function show(Pkl $pkl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pkl  $pkl
     * @return \Illuminate\Http\Response
     */
    public function edit(Pkl $pkl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pkl  $pkl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pkl $pkl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pkl  $pkl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pkl $pkl)
    {
        //
    }
}
