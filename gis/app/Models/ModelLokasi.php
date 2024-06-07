<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    protected $table            = 'lokasi';
    protected $primaryKey       = 'lokid';
    protected $allowedFields    = [
        'loknama', 'loklink', 'lokdeskripsi'
    ];

    // Dates
    protected $useTimestamps = true;

    public function dataLokasi()
    {
        return $this->table('lokasi')
            ->join('data_intilejen', 'intel_lokid=lokid', 'left')
            ->get();
    }
}
