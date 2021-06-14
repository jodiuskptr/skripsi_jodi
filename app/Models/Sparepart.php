<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = 'sparepart';

    public $timestamps = false;

    protected $fillable = [
        'merek_sparepart', 'jenis_sparepart', 'ukuran', 'daya_tahan', 'harga', 'lisensi'
    ];
}
