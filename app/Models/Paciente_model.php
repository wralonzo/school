<?php

namespace App\Models;

use CodeIgniter\Model;

class Paciente_model extends Model
{
    protected $table = 'paciente';

    protected $allowedFields = [
        'id_paciente',
        'lugar',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'lugar_familia',
        'ocupacion',
        'observaciones',
        'escolaridad',
        'estado_civil',
        'estudiante',
        'estado',
        'created_at',
        'nombre',
    ];
}

