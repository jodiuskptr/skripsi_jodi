<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = 'sparepart';

    public $timestamps = false;

    protected $fillable = [
        'merek_sparepart', 'kategori_id', 'ukuran', 'daya_tahan', 'harga', 'lisensi'
    ];
}
