<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class, 'id_admin');
    }

    public function konfirmasis()
    {
        return $this->hasMany(Konfirmasi::class, 'id_admin');
    }
}