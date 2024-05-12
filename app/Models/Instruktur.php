<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'ekskul_id',
        'jk'
    ];

    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }

    
    public function absen(){
        return $this->hasOne(AbsenInstruktur::class);
    }
}
