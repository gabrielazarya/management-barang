<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahBarangAdminController extends Controller
{
    public function index()
    {
        return view('admin/tambahbarang');
    }
}
