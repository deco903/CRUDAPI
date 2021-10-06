<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontak_siswa extends Model
{
    protected $table = 'kontaks';
    protected $fillable = ['id','nama','email','nohp','alamat'];
}
