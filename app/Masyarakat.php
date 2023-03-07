<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $timestamp = false;
    protected $table = 'masyarakats';
    protected $fillable = ['nama', 'username', 'password', 'tlp'];
}
