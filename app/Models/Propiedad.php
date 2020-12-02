<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $fillable = ['descripcion', 'id_domicilio', 'edad', 'long_descripcion', 'm2construccion', 'm3terreno', 'no_banos','no_cuartos', 'no_niveles', 'nombre_propietario', 'tipo_propiedad', 'status','precio'];
    use HasFactory;
}
