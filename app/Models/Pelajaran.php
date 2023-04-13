<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Pelajaran extends Model
{
    protected $connection="mongodb";
    protected $collection="pelajaran";
    protected $fillable=[
        "pelajaran",
        "id_siswa",
        "latihan_soal_1",
        "latihan_soal_2",
        "latihan_soal_3",
        "latihan_soal_4",
        "ulangan_harian_1",
        "ulangan_harian_2",
        "uts",
        "uas"
    ];
}
