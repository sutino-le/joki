<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'userid';
    protected $allowedFields    = [
        'usernama', 'useremail', 'userhp', 'userpassword', 'userlevel'
    ];

    // Dates
    protected $useTimestamps = true;

    
    public function dataUser()
    {
        return $this->table('user')
            ->join('level', 'levelid=userlevel', 'left')
            ->get();
    }

}