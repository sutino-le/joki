<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMenu extends Model
{
    protected $table            = 'menu';
    protected $primaryKey       = 'menuid';
    protected $allowedFields    = [
        'menunama', 'menudeskripsi', 'menuharga', 'menufoto'
    ];


    // Dates
    protected $useTimestamps = true;



    public function dataMenu()
    {
        return $this->table('menu')
            ->join('temp_pesanan', 'temp_psn_menuid=menuid', 'left')
            ->join('det_pesanan', 'det_psn_menuid=menuid', 'left')
            ->groupBy('menuid', 'ASC')
            ->get();
    }
}
