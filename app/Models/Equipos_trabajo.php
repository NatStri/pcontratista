<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos_trabajo extends Model
{
    use HasFactory;
    protected $fillable = [
        'empleado_codigo',
        'equipo_id',
    ];
}
