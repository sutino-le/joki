<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesanan extends Model
{
    protected $table            = 'pesanan';
    protected $primaryKey       = 'psn_id';
    protected $allowedFields    = [
        'psn_userid', 'psn_menuid', 'psn_tanggal', 'psn_jumlah', 'psn_status', 'psn_kurir'
    ];

    // Dates
    protected $useTimestamps = true;

    public function dataPesanan($userid)
    {
        return $this->table('pesanan')->where('psn_userid', $userid)->get();
    }
}
