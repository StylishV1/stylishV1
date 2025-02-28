<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $fillable = ['session_id', 'nombre', 'precio', 'imagen','user_id'];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    
}
