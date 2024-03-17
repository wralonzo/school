<?php

namespace App\Models;

use CodeIgniter\Model;

class Conyugue_model extends Model
{
    protected $table = 'conyugue';

    protected $allowedFields = [
        'id_conyugue',
        'nombre',
        'ocupacion',
        'observacion',
        'escolaridad',
        'edad',
        'lugar_familia',
        'direccion',
        'telefono',
        'paciente',
        'estado',
    ];
}