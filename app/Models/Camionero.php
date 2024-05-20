<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    public function camions(){
        return $this->belongsToMany('App\Models\camion');
    }
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');

    }
    use HasFactory;
}
