<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesananTemp extends Model
{
    protected $table            = 'temp_pesanan';
    protected $primaryKey       = 'temp_psn_id';
    protected $allowedFields    = [
        'temp_psn_menuid', 'temp_psn_jumlah', 'temp_psn_nomor'
    ];

    // Dates
    protected $useTimestamps = true;
}
