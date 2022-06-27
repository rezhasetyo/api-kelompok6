<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Http\Resources\FilmResource;
use Illuminate\Support\Facades\Validator;



class FilmController extends Controller
{       
        public function index(){
            $films = Film::latest()->paginate(9);
            return new FilmResource(true, 'List Data Film', $films);
        }

        public function store(Request $request) {
            $validator = Validator::make($request->all(), [
                'judul'     => 'required',
                'sutradara'   => 'required',
                'sinopsis'   => 'required',
                'tahun'   => 'required|numeric',
                'rating'   => 'required|numeric',
                'genre_id'   => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $films = Film::create([
                'judul'     => $request->judul,
                'sutradara'   => $request->sutradara,
                'sinopsis'   => $request->sinopsis,
                'tahun'   => $request->tahun,
                'rating'   => $request->rating,
                'genre_id'   => $request->genre_id,
            ]);

            return new FilmResource(true, 'Data Post Berhasil Ditambahkan!', $films);
        }

        public function show(Film $film)    {
            return new FilmResource(true, 'Data Film Ditemukan!', $film);
        }

        public function update(Request $request, Film $films)
        {
            $validator = Validator::make($request->all(), [
                'judul'     => 'required',
                'sutradara'   => 'required',
                'sinopsis'   => 'required',
                'tahun'   => 'required|numeric',
                'rating'   => 'required|numeric',
                'genre_id'   => 'required',
            ]);
    
            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }

            $films = Film::create([
                'judul'     => $request->judul,
                'sutradara'   => $request->sutradara,
                'sinopsis'   => $request->sinopsis,
                'tahun'   => $request->tahun,
                'rating'   => $request->rating,
                'genre_id'   => $request->genre_id,
            ]);

            return new FilmResource(true, 'Data Film Berhasil Diubah!', $films);
        }

        public function destroy(Film $film)
        {
            $film->delete();
            return new FilmResource(true, 'Data Film Berhasil Dihapus!', null);
        }
        
}
