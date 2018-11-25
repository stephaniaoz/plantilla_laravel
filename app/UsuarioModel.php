<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_codigo';
    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
    protected $fillable = [
        'usuario_login', 
        'usuario_clave', 
        'usuario_nombre', 
        'usuario_apellido', 
        'usuario_documento', 
        'usuario_telefono', 
        'usuario_email', 
        'usuario_creador', 
        'estado', 
        'hora_modificacion'
    ];
}
