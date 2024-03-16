<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'usuario';

    protected $allowedFields = [
        'nombres',
        'apellidos',
        'correo',
        'clave',
        'estado',
        'contacto',
        'role',
        'created_at'
    ];
}
