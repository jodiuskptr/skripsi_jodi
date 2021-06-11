<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengambilankeputusanController extends Controller
{
    function index()
    {
        return view('user.pengambilankeputusan');
    }
}
