<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre1 = new Genre;
        $genre1 -> nama_genre = "Action";
        $genre1 -> save();

        $genre2 = new Genre;
        $genre2 -> nama_genre = "Komedi";
        $genre2 -> save();

        $genre3 = new Genre;
        $genre3 -> nama_genre = "Horror";
        $genre3 -> save();

        $genre4 = new Genre;
        $genre4 -> nama_genre = "Fantasy";
        $genre4 -> save();

        $genre4 = new Genre;
        $genre4 -> nama_genre = "Romance";
        $genre4 -> save();
    }
}
