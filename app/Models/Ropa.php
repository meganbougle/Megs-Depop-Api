<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigoBarra',
        'nombre',
        'marca',
        'talla',
        'color',
        'precio',
    ];
}
