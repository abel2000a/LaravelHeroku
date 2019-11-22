<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public $table = 'client'; 
    protected $fillable = ['nombre', 'apellido', 'telefono', 'direccion', 'sexo'];
}
