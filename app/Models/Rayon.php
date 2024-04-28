<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama_rayon",
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
