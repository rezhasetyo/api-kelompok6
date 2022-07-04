<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Film;

class FilmController extends Controller
{   
    public function index(){
        $data = Film::all();
        return view('film', compact('data'));
    }

    public function show($id)   {
        $data = Film::find($id);
        return view('detail-film', compact('data'));
    }
}
