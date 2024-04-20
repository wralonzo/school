<?php

namespace App\Models;

use CodeIgniter\Model;

class ClassModel extends Model
{
    protected $table = 'class';

    protected $allowedFields = [
        'id_class',
        'name',
    ];
}