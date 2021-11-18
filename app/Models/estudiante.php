<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    //use HasFactory;
    protected $fillable = ['codigo','slug','nombre', 'apaterno', 'amaterno', 'dni', 'email', 'correo', 'telefono', 'sexo', 'carrera','semestre', 'tipo'];
    public function getRouteKeyName(){
    return 'slug';
    }
}
