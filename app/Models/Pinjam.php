<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pinjam';

    protected $fillable = [
        'id_admin',
        'id_user',
        'id_barang',
        'nama_barang',
        'jumlah_barang',
        'tanggal_pinjam',
        'tanggal_pengembalian',
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function konfirmasi()
    {
        return $this->hasOne(Konfirmasi::class, 'id_pinjam');
    }
}
