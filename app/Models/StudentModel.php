<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'children';

    protected $allowedFields = [
        'id_children',
        'name',
        'father',
        'user',
        'alert_cook',
        'alert',
    ];
}