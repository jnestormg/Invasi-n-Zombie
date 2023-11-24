<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superviviente extends Model
{
    use HasFactory;

    public function infectados(){
        return $this->hasMany(Infectados::class);
    }
    public function ubicaciones(){
        return $this->hasMany(Ubicaciones::class);
    }
    public function articulos(){
        return $this->hasMany(Articulos::class);
    }
    
}
