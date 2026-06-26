<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerakan extends Model
{
    protected $table = 'gerakan';
    protected $fillable = ['id_kategori', 'nama', 'urutan', 'deskripsi', 'gambar_url', 'video_url'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function bacaan()
    {
        return $this->hasMany(Bacaan::class, 'id_gerakan');
    }
}