<?php

namespace App\Models;

use CodeIgniter\Model;

class AttendanceClassModel extends Model
{
    protected $table = 'attendance_class';

    protected $allowedFields = [
        'id_attendance_class',
        'class',
        'children',
        'createdat',
    ];
}