<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'schedule',
        'kelas',
        'room_id',
        'ekskul_id',
        'startTime',
        'endTime',
    ];

    public function room(){
        return $this->belongsTo(room::class);
    }

    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }

}


