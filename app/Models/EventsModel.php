<?php

namespace App\Models;

use CodeIgniter\Model;

class EventsModel extends Model
{
    protected $table = 'event';

    protected $allowedFields = [
        'id_event',
        'name',
        'date',
        'status',
    ];
}