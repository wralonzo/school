<?php

namespace App\Models;

use CodeIgniter\Model;

class CookModel extends Model
{
    protected $table = 'cook';

    protected $allowedFields = [
        'descripction',
        'id_cook',
        'name',
    ];
}