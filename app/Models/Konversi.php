<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konversi extends Model
{
    protected $table = 'motor';

    public $timestamps = false;

    protected $fillable = [
        'id_sparepart', 'id_kategori', 'id_kriteria', 'nilai', 'id'
    ];
}
