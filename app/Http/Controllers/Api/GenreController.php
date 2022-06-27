<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Http\Resources\GenreResource;

class GenreController extends Controller
{
    public function index(){
        $genre = Genre::latest()->paginate(9);
        return new GenreResource(true, 'List Genre Film', $genre);
    }

    public function show(Genre $genre)    {
        return new GenreResource(true, 'List Genre Film Ditemukan!', $genre);
    }
}
