<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelompok;

class KelompokSeeder extends Seeder
{
    public function run(): void
    {
        Kelompok::create([
            'nama_kelompok' => 'Kelompok [Nama yang prontend isi ya]',
            'prodi' => 'Sistem Informasi',
            'mata_kuliah' => '(AIK 4)',
            'dosen' => 'Dedy Susanto, S.Pd.I., M.M.',
        ]);
    }
}
