<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Producto extends Model
{
    use HasFactory;

   // Definir los campos que se pueden llenar masivamente
   protected $fillable = ['talla', 'cantidad', 'color', 'imagen','precio' ];

   // Si estás usando nombres personalizados para las columnas de las fechas:
   const CREATED_AT = 'created_at';
   const UPDATED_AT = 'updated_at';
}
