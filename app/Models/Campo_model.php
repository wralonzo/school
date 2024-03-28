<?php

namespace App\Models;

use CodeIgniter\Model;

class Campo_model extends Model
{
    protected $table = 'campo';

    protected $allowedFields = [
        'id_campo',
        'nombre',
        'tipo',
        'seccion',
    ];
}
