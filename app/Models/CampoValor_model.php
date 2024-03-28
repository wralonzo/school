<?php

namespace App\Models;

use CodeIgniter\Model;

class CampoValor_model extends Model
{
    protected $table = 'campo_valor';

    protected $allowedFields = [
        'id_campo_valor',
        'id_campo',
        'valor',
        'id_paciente',
    ];
}
