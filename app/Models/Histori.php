<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    protected $table = 'histori';

    public $timestamps = false;

    protected $fillable = [
        'id_histori', 'id_user', 'harga', 'daya_tahan', 'lisensi', 'waktu'
    ];
}
