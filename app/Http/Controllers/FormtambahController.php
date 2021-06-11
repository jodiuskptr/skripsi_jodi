<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormtambahController extends Controller
{
    function index()
    {
        return view('admin.formtambah');
    }

    public function create()
    {
    }
}
