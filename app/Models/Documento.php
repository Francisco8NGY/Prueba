<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = ['escrituras','foto_calle','foto_fondo', 'foto_frente','foto_interior','foto_nivel','recibo_predial'];
}
