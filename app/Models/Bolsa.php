<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bolsa extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Especifica que usa la tabla 'productos'

    protected $fillable = [
        'talla', 'cantidad', 'color', 'imagen', 'precio', 'created_at', 'updated_at'
    ];
}
