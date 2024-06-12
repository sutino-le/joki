<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'userid';
    protected $allowedFields    = [
        'userid', 'usernama', 'useremail', 'userhp', 'userpassword', 'useralamat', 'userlevel'
    ];


    // Dates
    protected $useTimestamps = true;

    public function dataUser()
    {
        return $this->table('user')
            ->join('level', 'levelid=userlevel', 'left')
            ->get();
    }

    public function dataKurir()
    {
        return $this->table('user')
            ->join('level', 'levelid=userid', 'left')
            ->join('pesanan', 'psn_userid=userid', 'left')
            ->where('userlevel', '2')
            ->groupby('userid', 'asc')
            ->get();
    }
}
