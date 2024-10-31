<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo_ordenes extends Model
{
    use HasFactory;
    protected $fillable = [
        'orden_id',
        'equipo_id',
    ];
}
