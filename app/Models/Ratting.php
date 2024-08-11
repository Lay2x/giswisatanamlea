<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratting extends Model
{
    use HasFactory;
    protected $table = 'ratting';
    protected $primaryKey = 'id_ratting';
    protected $fillable = [
        'nama_komentator',
        'id_wisata',
        'ratting',
        'komentar',
        'tanggal_buat',
        'publish'
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id_wisata');
    }
}
