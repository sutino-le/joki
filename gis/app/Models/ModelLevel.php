<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLevel extends Model
{
    protected $table            = 'level';
    protected $primaryKey       = 'levelid';
    protected $allowedFields    = ['levelnama'];

    // Dates
    protected $useTimestamps = true;

    public function dataLevel()
    {
        return $this->table('level')
            ->join('user', 'userlevel=levelid', 'left')
            ->get();
    }

    public function cekLevel($levelnama)
    {
        return $this->table('level')->getWhere([
            'levelnama' => $levelnama
        ]);
    }
}
