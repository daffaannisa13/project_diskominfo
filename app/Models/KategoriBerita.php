<?php

// app/Models/KategoriBerita.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    use HasFactory;

    protected $table = 'kategori_berita';

    protected $fillable = [
        'nama_kategori',
    ];

    public function beritas()
    {
        return $this->hasMany(Berita::class, 'kategori_id');
    }
}