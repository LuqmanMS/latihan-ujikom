<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class soalController extends Controller
{
    public function soal()
    {
        return view ('fitur.soal');
    }
}
