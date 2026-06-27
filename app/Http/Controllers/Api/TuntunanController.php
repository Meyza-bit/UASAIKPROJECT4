<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;

class TuntunanController extends Controller
{
    public function data(string $mode)
    {
        // 1. Cari kategori sesuai mode (dewasa / anak)
        $kategori = Kategori::where('nama', $mode)->firstOrFail();

        // 2. Ambil gerakan + bacaan-nya, diurutkan
        $gerakan = $kategori->gerakan()
            ->with(['bacaan' => fn ($q) => $q->orderBy('urutan')])
            ->orderBy('urutan')
            ->get();

        // 3. Kembalikan sebagai JSON
        return response()->json($gerakan);
    }
}