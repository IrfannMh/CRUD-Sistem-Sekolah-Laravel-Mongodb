<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Siswa extends Model
{
    protected $connection="mongodb";
    protected $collection="siswa";
    protected $fillable=[
        "id_kelas",
        "nama",
        "umur"
    ];
}
