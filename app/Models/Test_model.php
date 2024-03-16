<?php

namespace App\Models;

use CodeIgniter\Model;

class Test_model extends Model
{
    protected $table = 'test';

    protected $allowedFields = [
        'id_test',
        'nombre',
    ];
}
