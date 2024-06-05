<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKeranjang extends Model
{
    protected $table            = 'keranjang';
    protected $primaryKey       = 'krn_id';
    protected $allowedFields    = [
        'krn_userid', 'krn_menuid', 'krn_tanggal', 'krn_jumlah', 'krn_status', 'krn_kurir'
    ];

    protected $useTimestamps = true;

    public function dataKeranjang($userid)
    {
        return $this->table('keranjang')
            ->join('menu', 'menuid=krn_menuid', 'left')
            ->where('krn_userid', $userid)
            ->get();
    }
}
