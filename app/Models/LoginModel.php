<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';

    protected $allowedFields = [
        'id_user',
        'user',
        'password',
        'createdat',
        'estado',
        'role',
    ];
}
