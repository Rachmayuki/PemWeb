<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarFilm extends Model
{
    use HasFactory;

    protected $table = 'daftar_films';
    protected $primaryKey = 'id';

    protected $fillable = [
        'Judul','Rating','Durasi'
    ];
}
