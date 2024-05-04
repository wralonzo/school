<?php

namespace App\Models;

use CodeIgniter\Model;

class AttendanceCookModel extends Model
{
    protected $table = 'cook_children';

    protected $allowedFields = [
        'id_children_cook',
        'cook',
        'children',
        'datecreated',
        'type',
    ];
}
