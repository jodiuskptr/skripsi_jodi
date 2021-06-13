<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    function index()
    {
        return view('User.histori');
    }
}
