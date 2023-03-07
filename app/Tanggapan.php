<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $timestamp = false;
    protected $table = 'tanggapans';
    protected $fillable = ['pengaduan_id', 'tgl_tanggapan', 'tanggapan', 'petugas_id'];
}
