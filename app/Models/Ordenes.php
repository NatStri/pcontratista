<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nrOrden',
        'direccion',
        'tarea_id',
        'cliente_id',
        'fecha',
        'estado_id',
        'vehiculo_id',
    ];
}
