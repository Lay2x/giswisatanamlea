<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipewisata extends Model
{
    use HasFactory;
    protected $table = 'tipe_wisata';
    protected $primaryKey = 'id_tipewisata';
    protected $fillable = [
        'tipe_wisata'
    ];
}
