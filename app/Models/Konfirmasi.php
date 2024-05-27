<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_konfirmasi';

    protected $fillable = [
        'id_pinjam',
        'id_admin',
        'tanggal_pinjam',
        'tanggal_pengembalian',
        'status',
    ];

    public function pinjam()
    {
        return $this->belongsTo(Pinjam::class, 'id_pinjam');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}
