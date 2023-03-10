<?php

namespace App\Http\Controllers;

use App\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masyarakat = Masyarakat::all();
        return view('masyarakat.index', compact('masyarakat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('masyarakat.tambah');
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
            'nama'        => 'required',
            'email'       => 'required',
            'password'    => 'required',
            'tlp'         => 'required',
            'jenkel'      => 'required',
            'alamat'      => 'required',
            'rt'          => 'required',
            'rw'          => 'required',
            'kode_pos'    => 'required',
            'province_id' => 'required',
            'regency_id'  => 'required',
            'district_id' => 'required',
            'village_id'  => 'required'
        ]);
            
        Masyarakat::create([
            'nama'        => $request->nama,
            'email'       => $request->email,
            'password'    => $request->password,
            'tlp'         => $request->tlp,
            'jenkel'      => $request->jenkel,
            'alamat'      => $request->alamat,
            'rt'          => $request->rt,
            'rw'          => $request->rw,
            'kode_pos'    => $request->kode_pos,
            'province_id' => $request->province_id,
            'regency_id'  => $request->regency_id,
            'district_id' => $request->district_id,
            'village_id'  => $request->village_id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
