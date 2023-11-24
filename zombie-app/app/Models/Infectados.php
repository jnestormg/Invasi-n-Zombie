<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infectados extends Model
{
    use HasFactory;
    public function superviviente(){
        return $this->belongsTo(Superviviente::class);
    }
}
