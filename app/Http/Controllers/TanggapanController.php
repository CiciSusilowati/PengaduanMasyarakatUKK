<?php

namespace App\Http\Controllers;

use App\Tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('tanggapan.tambah');
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
            'pengaduan_id' => 'required',
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            'petugas_id' => 'required'
        ]);

        Tanggapan::create([
            'pengaduan_id' => $request->pengaduan_id,
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'petugas_id' => $request->petugas_id
        ]);

        return redirect('/tanggapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tanggapan = Tanggapan::where('id',$id)->first();
        return view('tanggapan.show', compact('tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggapan = Tanggapan::find($id);
        return view('tanggapan.edit', compact('tanggapan'));
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
            'pengaduan_id' => 'required',
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            'petugas' => 'required'
        ]);

        $tanggapan = Tanggapan::find($id);
        $tanggapan->pengaduan_id = $request->pengaduan_id;
        $tanggapan->tgl_tanggapan = $request->tgl_tanggapan;
        $tanggapan->tanggapan = $request->tanggapan;
        $tanggapan->petugas_id = $request->petugas_id;
        $tanggapan->save();
        
        return redirect('/tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tanggapan = Tanggapan::find($id);
        $tanggapan->delete();
        return redirect('/tanggapan');
    }
}
