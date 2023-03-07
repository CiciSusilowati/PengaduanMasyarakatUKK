<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('pengaduan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_pengaduan'     => 'required',
            'masyarakat_nik'    => 'required',
            'judul_pengaduan'   => 'required',
            'isi_laporan'       => 'required',
            'foto'              => 'required',
            'status'            => 'required'
        ]);

        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image'), $imgName);

        Pengaduan::create([
            'tgl_pengaduan'     => $request->tgl_pengaduan,
            'masyarakat_nik'    => $request->masyarakat_nik,
            'judul_pengaduan'   => $request->judul_pengaduan,
            'isi_laporan'       => $request->isi_laporan,
            'foto'              => $imgName,
            'status'            => $request->status
        ]);

        return redirect('/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::where('id',$id)->first();
        return view('pengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tgl_pengaduan'   => 'required',
            'masyarakat_nik'  => 'required',
            'judul_pengaduan' => 'required',
            'isi_laporan'     => 'required',
            'foto'            => 'required',
            'status'          => 'required'
        ]);

        $pengaduan = Pengaduan::find($id);
        $pengaduan->tgl_pengaduan   = $request->tgl_pengaduan;
        $pengaduan->masyarakat_nik  = $request->masyarakat_nik;
        $pengaduan->judul_pengaduan = $request->judul_pengaduan;
        $pengaduan->isi_laporan     = $request->isi_laporan;
        $pengaduan->foto            = $request->foto;
        $pengaduan->status          = $request->status;
        $pengaduan->save();
        
        return redirect('/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();
        return redirect('/pengaduan');
    }
}
