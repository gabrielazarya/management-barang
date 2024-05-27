<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }
    public function informasi(){
        return view('user.informasi');
    }
    public function pinjam(){
        return view('user.pinjam');
    }
    public function profil(){
        return view('user.profil');
    }
    public function riwayat(){
        return view('user.riwayat');
    }
}
