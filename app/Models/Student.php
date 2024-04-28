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
        "rombel_id",
        "rayon_id",
        "ekskul_id",
        "jk",
    ];

    public function absen(){
        return $this->hasOne(Absen::class);
    }

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function rombel()
    {
        return $this->belongsTo(Rombel::class);
    }

    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }
}
