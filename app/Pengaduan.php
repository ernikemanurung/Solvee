<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    protected $fillable = [
        'nik', 'judul', 'kategori_pengaduan', 'provinsi', 'kabupaten', 'kecamatan', 'desa', 'lokasi_pengaduan', 'deskripsi', 'image', 'tanggal', 'nama',
    ];

}
