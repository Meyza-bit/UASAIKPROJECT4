<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bacaan;
use App\Models\Gerakan;

class BacaanSeeder extends Seeder
{
    public function run(): void
    {
        $bacaanList = [
            2  => ['teks_arab' => 'الله أكبر', 'teks_latin' => 'Allāhu Akbar', 'terjemahan' => 'Allah Maha Besar'],
            3  => ['teks_arab' => null, 'teks_latin' => null, 'terjemahan' => 'Doa Iftitah (lengkap menyusul dari HPT)'],
            4  => ['teks_arab' => null, 'teks_latin' => null, 'terjemahan' => 'Surah Al-Fatihah + surah/ayat pilihan'],
            5  => ['teks_arab' => 'سُبْحَانَ رَبِّيَ الْعَظِيمِ', 'teks_latin' => 'Subhāna rabbiyal a\'dhīm', 'terjemahan' => 'Maha Suci Tuhanku Yang Maha Agung'],
            6  => ['teks_arab' => 'سَمِعَ اللهُ لِمَنْ حَمِدَهُ', 'teks_latin' => 'Sami\'allāhu liman hamidah', 'terjemahan' => 'Allah mendengar orang yang memuji-Nya'],
            7  => ['teks_arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'teks_latin' => 'Subhāna rabbiyal a\'lā', 'terjemahan' => 'Maha Suci Tuhanku Yang Maha Tinggi'],
            8  => ['teks_arab' => null, 'teks_latin' => null, 'terjemahan' => 'Doa duduk antara dua sujud (lengkap menyusul dari HPT)'],
            9  => ['teks_arab' => 'سُبْحَانَ رَبِّيَ الْأَعْلَى', 'teks_latin' => 'Subhāna rabbiyal a\'lā', 'terjemahan' => 'Maha Suci Tuhanku Yang Maha Tinggi'],
            11 => ['teks_arab' => null, 'teks_latin' => null, 'terjemahan' => 'Tasyahud awal (lengkap menyusul dari HPT)'],
            12 => ['teks_arab' => null, 'teks_latin' => null, 'terjemahan' => 'Tasyahud akhir + shalawat (lengkap menyusul dari HPT)'],
            13 => ['teks_arab' => 'السَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ', 'teks_latin' => 'Assalāmu\'alaikum wa rahmatullāh', 'terjemahan' => 'Semoga keselamatan dan rahmat Allah tercurah atasmu'],
        ];

        foreach ($bacaanList as $urutanGerakan => $isi) {
            $gerakan = Gerakan::where('urutan', $urutanGerakan)->where('id_kategori', 1)->first();

            if ($gerakan) {
                Bacaan::create([
                    'id_gerakan' => $gerakan->id,
                    'urutan' => 1,
                    'teks_arab' => $isi['teks_arab'],
                    'teks_latin' => $isi['teks_latin'],
                    'terjemahan' => $isi['terjemahan'],
                    'audio_url' => null, // isi setelah file MP3 tersedia
                    'sumber' => 'HPT Muhammadiyah – Kitab Shalat',
                ]);
            }
        }
    }
}
