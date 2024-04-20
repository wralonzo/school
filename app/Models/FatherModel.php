<?php

namespace App\Models;

use CodeIgniter\Model;

class FatherModel extends Model
{
    protected $table = 'father';

    protected $allowedFields = [
        'id_father',
        'name',
        'address',
        'mobile',
        'user',
    ];
}