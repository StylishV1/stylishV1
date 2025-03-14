<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactanos extends Model
{
    use HasFactory;
    protected $table = 'contactanos';

    protected $fillable = ['nombre', 'correo', 'telefono', 'mensaje'];
}
