<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';

    public $timestamps = false;

    protected $fillable = [
        'id', 'nama_kriteria',
    ];
}
