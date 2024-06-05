<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesanan extends Model
{
    protected $table            = 'pesanan';
    protected $primaryKey       = 'pesanid';
    protected $allowedFields    = [
        'pesannomor', 'pesanuser', 'pesanstatus', 'pesankurir'
    ];

    // Dates
    protected $useTimestamps = true;
}
