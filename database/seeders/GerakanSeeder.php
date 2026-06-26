<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gerakan;

class GerakanSeeder extends Seeder
{
    public function run(): void
    {
        $gerakanList = [
            ['nama' => 'Berdiri Tegak (Qiyam)', 'urutan' => 1, 'deskripsi' => 'Berdiri tegak menghadap kiblat disertai niat.'],
            ['nama' => 'Takbiratul Ihram', 'urutan' => 2, 'deskripsi' => 'Mengangkat kedua tangan sambil mengucap takbir.'],
            ['nama' => 'Bersedekap', 'urutan' => 3, 'deskripsi' => 'Tangan kanan diletakkan di atas tangan kiri.'],
            ['nama' => 'Membaca Al-Fatihah', 'urutan' => 4, 'deskripsi' => 'Berdiri membaca Surah Al-Fatihah, lalu surah/ayat Al-Qur\'an.'],
            ['nama' => 'Rukuk', 'urutan' => 5, 'deskripsi' => 'Membungkuk dengan thuma\'ninah (tenang).'],
            ['nama' => 'I\'tidal', 'urutan' => 6, 'deskripsi' => 'Bangkit dari rukuk, berdiri tegak kembali.'],
            ['nama' => 'Sujud Pertama', 'urutan' => 7, 'deskripsi' => 'Sujud dengan thuma\'ninah.'],
            ['nama' => 'Duduk Antara Dua Sujud', 'urutan' => 8, 'deskripsi' => 'Duduk iftirasy di antara dua sujud.'],
            ['nama' => 'Sujud Kedua', 'urutan' => 9, 'deskripsi' => 'Sujud kedua dengan thuma\'ninah.'],
            ['nama' => 'Berdiri ke Rakaat Berikutnya', 'urutan' => 10, 'deskripsi' => 'Bangkit menuju rakaat selanjutnya.'],
            ['nama' => 'Duduk Tasyahud Awal', 'urutan' => 11, 'deskripsi' => 'Duduk iftirasy untuk tasyahud awal.'],
            ['nama' => 'Duduk Tasyahud Akhir', 'urutan' => 12, 'deskripsi' => 'Duduk tawarruk untuk tasyahud akhir.'],
            ['nama' => 'Salam', 'urutan' => 13, 'deskripsi' => 'Menoleh ke kanan dan ke kiri sambil mengucap salam.'],
        ];

        foreach ($gerakanList as $g) {
            Gerakan::create([
                'id_kategori' => 1, // 1 = dewasa
                'nama' => $g['nama'],
                'urutan' => $g['urutan'],
                'deskripsi' => $g['deskripsi'],
                'gambar_url' => null, // isi setelah aset gambar tersedia
                'video_url' => null,  // isi setelah aset video tersedia
            ]);
        }
    }
}
