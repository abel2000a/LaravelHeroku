<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    public $table = 'workers';
   
    protected $fillable = ['nombre', 'inicio_anio', 'contrato', 'cargo', 'cliente_id'];
}
