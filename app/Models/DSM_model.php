<?php

namespace App\Models;

use CodeIgniter\Model;

class DSM_model extends Model
{
    protected $table = 'dsm';

    protected $allowedFields = [
        'id_dsm',
        'nombre',
        'hallazgo',
        'id_paciente',
    ];
}
