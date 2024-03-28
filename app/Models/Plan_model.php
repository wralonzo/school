<?php

namespace App\Models;

use CodeIgniter\Model;

class Plan_model extends Model
{
    protected $table = 'plan_terapeutico';

    protected $allowedFields = [
        'id_plan',
        'fecha',
        'actividad',
        'detalle',
        'id_paciente',
    ];
}
