<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =[
        "nama",
        "nis",
        "rombel",
        "rayon",
        "jk",
    ];

    public function absen(){
        return $this->hasOne(Absen::class);
    }
}
