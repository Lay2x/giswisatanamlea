<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $fillable = [
        'tipe_wisata',
        'nama_wisata',
        'lokasi',
        'pemilik',
        'daya_tarik',
        'sarana',
        'fasilitas',
        'luas',
        'biaya_masuk',
        'deskripsi',
        'foto_wisata',
        'foto_wisata2',
        'foto_wisata3',
        'long_lokasi',
        'lat_lokasi',
        'slug_wisata',
    ];

    public function rattings()
    {
        return $this->hasMany(Ratting::class, 'id_wisata', 'id_wisata');
    }
}
