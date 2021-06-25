<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motor';

    public $timestamps = false;

    protected $fillable = [
        'id_motor', 'merek_motor'
    ];
}
