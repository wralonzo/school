<?php

namespace App\Models;

use CodeIgniter\Model;

class Cita_model extends Model
{
    protected $table = 'citas';

    protected $allowedFields = [
        'id_cita',
        'fecha',
        'hora',
        'estudiante',
        'jornada',
        'estado_cita',
        'estado',
        'created_at',
        'paciente',
    ];
}
