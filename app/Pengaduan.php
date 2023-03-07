<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $timestamp = false;
    protected $table = 'pengaduans';
    protected $fillable = ['tgl_pengaduan', 'masyarakat_nik', 'judul_pengaduan', 'isi_laporan', 'foto', 'status'];
}
