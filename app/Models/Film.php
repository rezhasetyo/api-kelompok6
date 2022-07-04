<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table    = 'film';
    protected $fillable = ['judul', 'sutradara', 'sinopsis', 
                            'tahun', 'rating', 'genre_id', 'harga'];

    public function genre(){
        return $this->belongsTo(Genre::class); 
    }
}
