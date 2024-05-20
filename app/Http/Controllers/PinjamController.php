<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function pinjam()
    {
        return view('user/pinjam');
    }
}
