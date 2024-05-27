<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
    ];

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class, 'id_barang');
    }
}
