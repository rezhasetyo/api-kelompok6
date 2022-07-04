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
}
