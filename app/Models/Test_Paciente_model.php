<?php

namespace App\Models;

use CodeIgniter\Model;

class Test_Paciente_model extends Model
{
    protected $table = 'test_paciente';

    protected $allowedFields = [
        'id_test_paciente',
        'test',
        'paciente',
        'observaciones',
        'created_at',
        'estado',
        'image',
    ];
}
