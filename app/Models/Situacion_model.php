<?php

namespace App\Models;

use CodeIgniter\Model;

class Situacion_model extends Model
{
    protected $table = 'situacion_familiar';

    protected $allowedFields = [
        'id_situacion',
        'nombre',
        'sexo',
        'estado_civil',
        'escolaridad',
        'observacion',
        'id_paciente',
        'edad',
    ];
}
