<?php

namespace App\Models;

use CodeIgniter\Model;

class apiMod extends Model
{
    protected $table = 'tb_login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email', 'password', 'foto'];
}
