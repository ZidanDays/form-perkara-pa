<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkara extends Model
{
    use HasFactory;

    // protected $table = 'perkaras'; // Pastikan nama tabel sesuai
    protected $fillable = [
        'tanggal', 
        'nomor_perkara', 
        'nama', 
        'alamat', 
        'nomor_telepon', 
        'pihak'
    ];
}