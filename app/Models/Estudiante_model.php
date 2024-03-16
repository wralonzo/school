<?php

namespace App\Models;

use CodeIgniter\Model;

class Estudiante_model extends Model
{
    protected $table = 'estudiante';

    protected $allowedFields = [
        'id_estudiante',
        'carnet',
        'nombre',
        'apellido',
        'semestre',
        'edad',
        'lugar',
        'genero',
        'estado',
        'id_usuario',
    ];
}
