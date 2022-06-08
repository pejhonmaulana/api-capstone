<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Padi;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama'
    ];

    public function varietas(){
        return $this->hasMany(Padi::class);
    }
}
