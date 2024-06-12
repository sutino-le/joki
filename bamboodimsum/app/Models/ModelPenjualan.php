<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenjualan extends Model
{
    protected $table            = 'penjualan';
    protected $primaryKey       = 'pjl_id';
    protected $allowedFields    = [
        'pjl_nomor', 'pjl_userid', 'pjl_tanggal', 'pjl_totalharga'
    ];


    // Dates
    protected $useTimestamps = true;

    public function nomorPenjualan($userid)
    {
        return $this->table('penjualan')->select('max(pjl_nomor) as nopenjualan')->where('pjl_userid', $userid)->get();
    }



    public function dataPengantaran()
    {
        return $this->table('penjualan')
            ->join('pesanan', 'psn_nomor=pjl_nomor', 'left')
            ->join('menu', 'menuid=psn_menuid', 'left')
            ->join('user', 'userid=pjl_userid', 'left')
            ->where('psn_status', 'Pesanan Selesai')
            ->groupby('psn_nomor', 'Desc')
            ->get();
    }
}
