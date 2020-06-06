<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
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
        $info = DB::table('tb_informasi')->join('users', 'tb_informasi.username', '=', 'users.username')->where('tb_informasi.username', \Auth::user()->username)->where('tb_informasi.kategori','!=','Berita' )->orderBy('tb_informasi.id', 'asc')->paginate(10);
        return view('admin.pengumuman.index', ['info' => $info]);
        // return view('admin.pengumuman.index');
        // echo json_encode($info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumuman.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
    		'judul' => 'required',
            'konten' => 'required',
            'kategori' => 'required',
            'tag' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $info = new \App\Pengumuman();
        $info->username = \Auth::user()->username;
        $info->judul = $request->get('judul');
        $info->slug = str_slug($request->get('judul'));
        $gambar = $request->file('gambar');
        if($gambar){
            $cover_path = $gambar->store('info-covers', 'public');

            $info->gambar = $cover_path;
          }
        $info->konten = $request->get('konten');
        $info->kategori = $request->get('kategori');
        $info->status = $request->get('action');
        $info->tag = $request->get('tag');
        $info->save();

        if($request->get('action') == 'PUBLISH'){
          return redirect()
                ->route('pengumuman.index')
                ->with('status', 'pengumuman successfully saved and published');
        } else {
          return redirect()
                ->route('pengumuman.index')
                ->with('status', 'pengumuman saved as draft');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        //
    }
}
