<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Kelas extends Model
{
    protected $connection="mongodb";
    protected $collection="kelas";
    protected $fillable=[
        "kelas",
        "wali_kelas"
    ];
}
