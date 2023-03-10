<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $timestamp = false;
    protected $table = 'masyarakats';
    protected $fillable = ['nama', 'email', 'password', 'tlp', 'jenkel', 'alamat', 'rt', 'rw', 'kode_pos', 'privince_id', 'regency_id', 'district_id', 'village_id'];
}
