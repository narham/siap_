<?php

namespace App\Models;

use CodeIgniter\Model;

class MatchModel extends Model
{
    protected $table = 'matches';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['home_team', 'away_team', 'match_date', 'location', 'home_score', 'away_score'];
    protected $useTimestamps = true;
}