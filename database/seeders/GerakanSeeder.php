<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gerakan;

class GerakanSeeder extends Seeder
{
    public function run(): void
    {
        $gerakanDewasa = [
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

        foreach ($gerakanDewasa as $g) {
            Gerakan::create([
                'id_kategori' => 1,
                'nama' => $g['nama'],
                'urutan' => $g['urutan'],
                'deskripsi' => $g['deskripsi'],
                'gambar_url' => null,
                'video_url' => null,
            ]);
        }

        $gerakanAnak = [
            ['nama' => 'Berdiri Tegak (Qiyam)', 'urutan' => 1, 'deskripsi' => 'Berdiri tegak menghadap kiblat sambil berniat di dalam hati.'],
            ['nama' => 'Takbiratul Ihram', 'urutan' => 2, 'deskripsi' => 'Angkat kedua tangan sambil mengucap "Allahu Akbar".'],
            ['nama' => 'Bersedekap', 'urutan' => 3, 'deskripsi' => 'Letakkan tangan kanan di atas tangan kiri di dada.'],
            ['nama' => 'Membaca Al-Fatihah', 'urutan' => 4, 'deskripsi' => 'Membaca Surah Al-Fatihah, lalu surah pendek.'],
            ['nama' => 'Rukuk', 'urutan' => 5, 'deskripsi' => 'Membungkukkan badan dengan tenang.'],
            ['nama' => 'I\'tidal', 'urutan' => 6, 'deskripsi' => 'Berdiri tegak lagi setelah rukuk.'],
            ['nama' => 'Sujud Pertama', 'urutan' => 7, 'deskripsi' => 'Bersujud dengan tenang, dahi menyentuh lantai.'],
            ['nama' => 'Duduk Antara Dua Sujud', 'urutan' => 8, 'deskripsi' => 'Duduk sebentar di antara dua sujud.'],
            ['nama' => 'Sujud Kedua', 'urutan' => 9, 'deskripsi' => 'Bersujud lagi dengan tenang.'],
            ['nama' => 'Berdiri ke Rakaat Berikutnya', 'urutan' => 10, 'deskripsi' => 'Berdiri untuk rakaat berikutnya.'],
            ['nama' => 'Duduk Tasyahud Awal', 'urutan' => 11, 'deskripsi' => 'Duduk membaca tasyahud awal.'],
            ['nama' => 'Duduk Tasyahud Akhir', 'urutan' => 12, 'deskripsi' => 'Duduk membaca tasyahud akhir.'],
            ['nama' => 'Salam', 'urutan' => 13, 'deskripsi' => 'Menoleh ke kanan dan ke kiri sambil mengucap salam.'],
        ];

        foreach ($gerakanAnak as $g) {
            Gerakan::create([
                'id_kategori' => 2,
                'nama' => $g['nama'],
                'urutan' => $g['urutan'],
                'deskripsi' => $g['deskripsi'],
                'gambar_url' => null,
                'video_url' => null,
            ]);
        }
    }
}