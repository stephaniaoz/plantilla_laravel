<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaisModel extends Model
{
    protected $table = 'pais';
    protected $primaryKey = 'pais_codigo';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
    protected $fillable = [
        'pais_nombre',
        'pais_coddane', 
        'pais_codiso',
        'usuario_modificacion', 
        'estado',
        'hora_modificacion'
    ];
}
