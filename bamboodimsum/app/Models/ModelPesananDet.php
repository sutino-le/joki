<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesananDet extends Model
{
    protected $table            = 'det_pesanan';
    protected $primaryKey       = 'det_psn_id';
    protected $allowedFields    = [
        'det_psn_menuid', 'det_psn_jumlah', 'det_psn_nomor'
    ];

    // Dates
    protected $useTimestamps = true;
}