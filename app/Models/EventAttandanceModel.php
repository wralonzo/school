<?php

namespace App\Models;

use CodeIgniter\Model;

class EventAttandanceModel extends Model
{
    protected $table = 'attendance_event';

    protected $allowedFields = [
        'id_att_event',
        'children',
        'event',
        'createdat',
    ];
}