<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    protected $table = 'teacher';

    protected $allowedFields = [
        'id_teacher',
        'name',
        'address',
        'mobile',
        'user',
    ];
}