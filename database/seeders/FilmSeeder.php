<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;


class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $film1 = new Film;
        $film1 -> judul = "KKN Desa Penari";
        $film1 -> sutradara = "Awi Suryadi";
        $film1 -> sinopsis = "Enam mahasiswa yang melaksanakan KKN di sebuah desa terpencil, Nur (Tissa Biani), Widya ( Adinda Thomas), Ayu (Aghniny Haque), Bima (Achmad Megantara), Anton (Calvin Jeremy) dan Wahyu (M Fajar Nugraha) tidak pernah menyangka kalau desa yang mereka pilih ternyata bukanlah desa biasa. Pak Prabu (Kiki Narendra), kepala desa, memperingatkan mereka untuk tidak melewati batas gapura terlarang. Tempat misterius itu mungkin ada hubungannya dengan penari cantik yang mulai menganggu Nur dan juga Widya. Satu persatu mulai merasakan keanehan desa tersebut. Bima pun mulai berubah sikap. Program KKN mereka berantakan. Tampaknya penghuni gaib desa tersebut tidak menyukai mereka. Nur akhirnya menemukan fakta bahwa salah satu dari mereka melanggar aturan yang paling fatal di desa tersebut. Teror sosok penari misterius semakin menyeramkan. Mereka meminta bantuan Mbah Buyut (Diding Boneng) dukun setempat. Terlambat. Mereka terancam tidak bisa pulang dengan selamat dari desa yang dikenal dengan sebutan desa penari itu.";
        $film1 -> tahun = "2022";
        $film1 -> rating = "6.3";
        $film1 -> harga = "20000";
        $film1 -> genre_id = "3";
        $film1 -> save();

        $film2 = new Film;
        $film2 -> judul = "Ngeri-Ngeri Sedap";
        $film2 -> sutradara = "Bene Dion Rajagukguk";
        $film2 -> sinopsis = "Pak Domu (Arswendi Bening Swara) dan Mak Domu (Tika Panggabean) tinggal dengan anaknya, Sarma (Gita Bhebita). Suami-istri yang sudah tua itu ingin ketiga anak lainnya,  Domu (Boris Bokir), Gabe (Lolox), dan Sahat (Indra Jegel), pulang untuk menghadiri acara adat. Ketiganya menolak pulang karena tidak akur dengan Pak Domu. Pak Domu dan Mak Domu akhirnya pura-pura bertengkar dan ingin bercerai demi mendapatkan perhatian anak-anak mereka.";
        $film2 -> tahun = "2022";
        $film2 -> rating = "8.5";
        $film2 -> harga = "25000";
        $film2 -> genre_id = "2";
        $film2 -> save();

        $film3 = new Film;
        $film3 -> judul = "Kuntilanak 3";
        $film3 -> sutradara = "Rizal Mantovani";
        $film3 -> sinopsis = "Dinda (Nicole Rossi), yang dianggap aneh oleh anak-anak kampung karena kekuatannya, tidak sengaja melukai Panji (Adlu Fahrezy) dan Ambar (Ciara Brosnan). Ia menyesal dan meminta Tante Donna (Nena Rosier) mendaftarkannya ke Sekolah Mata Hati, agar ia bisa belajar mengontrol kekuatannya. Di sekolah itu Dinda langsung mendapat teman sebayanya: Denis (Farras Fatik) dan Uchi (Clarice Cutie). Di rumah, saudara-saudara Dinda menyelidiki sekolah itu dan menemukan hal-hal aneh: banyak murid yang menghilang. Miko (Ali Fikry) dan Kresna (Andryan Brima) memutuskan menyusul Dinda umtuk membawanya pulang. Baskara (Wafda Saifan), kepala sekolah, merasa kehadiran Dinda membawa aura tersendiri. Hal ini dilaporkan ke Eyang Sukma (Sara Wijayanto), pendiri sekolah yang tinggal di tempat tersembunyi dan tak terlihat para siswa. Ia merasa dihantui oleh sosok kuntilanak. Dinda adalah anak cenayang paling spesial yang pernah ada di sekolah itu. Ia keturunan Mangkujiwo dan jagal kuntilanak. Kekuatan-kekuatan kuntilanak yang telah ia bunuh  mengendap di dirinya. Dinda menemukan rintangan lain dalam hidupnya di semesta kuntilanak.";
        $film3 -> tahun = "2022";
        $film3 -> rating = "5.3";
        $film3 -> harga = "30000";
        $film3 -> genre_id = "3";
        $film3 -> save();

        $film4 = new Film;
        $film4 -> judul = "Bad Boys for Life";
        $film4 -> sutradara = "Adil El Arbi";
        $film4 -> sinopsis = "Miami detectives Mike Lowrey and Marcus Burnett must face off against a mother-and-son pair of drug lords who wreak vengeful havoc on their city.";
        $film4 -> tahun = "2020";
        $film4 -> rating = "6.5";
        $film4 -> harga = "35000";
        $film4 -> genre_id = "1";
        $film4 -> save();

        $film5 = new Film;
        $film5 -> judul = "Jurassic World Dominion";
        $film5 -> sutradara = "Colin Trevorrow";
        $film5 -> sinopsis = "Four years after the destruction of Isla Nublar, dinosaurs now live--and hunt--alongside humans all over the world. This fragile balance will reshape the future and determine, once and for all, whether human beings are to remain the apex predators on a planet they now share with history's most fearsome creatures in a new Era.";
        $film5 -> tahun = "2022";
        $film5 -> rating = "6.0";
        $film5 -> harga = "40000";
        $film5 -> genre_id = "1";
        $film5 -> save();

        $film6 = new Film;
        $film6 -> judul = "Doctor Strange in the Multiverse of Madness";
        $film6 -> sutradara = "Sam Raimi";
        $film6 -> sinopsis = "Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse. They seek help from Wanda the Scarlet Witch, Wong and others.";
        $film6 -> tahun = "2022";
        $film6 -> rating = "7.2";
        $film6 -> harga = "45000";
        $film6 -> genre_id = "4";
        $film6 -> save();

        $film7 = new Film;
        $film7 -> judul = "Three Idiots";
        $film7 -> sutradara = "Rajkumar Hirani";
        $film7 -> sinopsis = "3 Idiots, seperti judulnya film ini tentang 3 orang mahasiswa jurusan teknik mesin di Imperial College of Engineering (ICE). Ketiganya bernama Farhan Qureshi (Madhavan), Raju Rastogi (Sharman Joshi) dan 'Rancho' Shamaldas Chanchad (Aamir Khan). Mereka menjalani suka duka dunia perkuliahan yang keras di ICE, sambil bertahan dari penindasan dan tekanan Direktur ICE, Dr. Viru Sahastrabuddhe atau yang biasa dipanggil Virus/Virus Komputer oleh para mahasiswa.";
        $film7 -> tahun = "2009";
        $film7 -> rating = "7.2";
        $film7 -> harga = "50000";
        $film7 -> genre_id = "2";
        $film7 -> save();

        $film8 = new Film;
        $film8 -> judul = "Kuch Kuch Hota Hai";
        $film8 -> sutradara = "Karan Johar";
        $film8 -> sinopsis = "Kuch Kuch Hota Hai (bahasa Indonesia: Sesuatu Sesuatu Terjadi), juga dikenal sebagai KKHH, adalah sebuah film drama percintaan berbahasa Hindi India 1998. Film tersebut ditulis dan disutradarai oleh Karan Johar, dan dibintangi oleh Shah Rukh Khan dan Kajol dalam peran utama, Rani Mukerji dalam peran pendukung, dan Salman Khan tampil dalam penampilan kameo ekstended. Sana Saeed, yang tampil dalam peran pendukung, memulai debut aktingnya dengan film tersebut.";
        $film8 -> tahun = "1998";
        $film8 -> rating = "8.4";
        $film8 -> harga = "60000";
        $film8 -> genre_id = "5";
        $film8 -> save();

        $film9 = new Film;
        $film9 -> judul = "Bharat";
        $film9 -> sutradara = "Ali Abbas Zafar";
        $film9 -> sinopsis = "Bharat (transl. India)[a] is a 2019 Indian Hindi-language drama film written and directed by Ali Abbas Zafar. It is jointly produced by Atul Agnihotri, Alvira Khan Agnihotri, Bhushan Kumar, Krishan Kumar, Nikhil Namit and Salman Khan under the banners Reel Life Productions, Salman Khan Films and T-Series. The film stars Salman Khan, Katrina Kaif, Sunil Grover, Disha Patani and Jackie Shroff. Tabu makes a friendly appearance. It traces India's post-independence history from the perspective of a common man, and follows his life from the age of 8 to 70.";
        $film9 -> tahun = "2019";
        $film9 -> rating = "7.8";
        $film9 -> harga = "65000";
        $film9 -> genre_id = "1";
        $film9 -> save();
    }
}
