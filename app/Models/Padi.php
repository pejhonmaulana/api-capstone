<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Padi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'tekstur',
        'hama',
        'penyakit',
        'anjuran_tanam',
        'potensi_hasil',
        'kategori_id',
        'harga',
        'gambar',
    ];

    public function category(){
        return $this->belongsToMany(Kategori::class);
    }
}

