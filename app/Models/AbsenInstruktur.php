<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenInstruktur extends Model
{
    use HasFactory;
    protected $fillable = [
        'instruktur_id',
        'tanggalKehadiran',
        'status_kehadiran',
    ];

    public function instruktur(){
        return $this->belongsTo(Instruktur::class);
    }
}
