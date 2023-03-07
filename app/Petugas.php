<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $timestamp = false;
    protected $table = 'petugas';
    protected $fillable = ['nm_petugas', 'username', 'password', 'tlp', 'level'];
}
