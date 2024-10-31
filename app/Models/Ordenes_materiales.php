<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenes_materiales extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad_utilizada',
    ];
}
