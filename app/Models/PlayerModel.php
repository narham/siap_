<?php

namespace App\Models;

use CodeIgniter\Model;

class PlayerModel extends Model
{
    protected $table = 'players';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'position', 'number', 'team'];
    protected $useTimestamps = true;
}
