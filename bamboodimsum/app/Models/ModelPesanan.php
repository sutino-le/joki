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
        return $this->table('pesanan')
            ->join('menu', 'menuid=psn_menuid', 'left')
            ->where('psn_userid', $userid)
            ->get();
    }




    public function daftarPesanan()
    {
        return $this->table('pesanan')
            ->join('menu', 'menuid=psn_menuid', 'left')
            ->join('user', 'userid=psn_userid', 'left')
            ->groupBy('psn_userid', 'Asc')
            ->where('psn_status', 'Progress')
            ->get();
    }




    public function dataPesan()
    {
        return $this->table('pesanan')
            ->join('menu', 'menuid=psn_menuid', 'left')
            ->join('user', 'userid=psn_userid', 'left')
            ->orderby('psn_tanggal', 'Desc')
            ->orderby('psn_id', 'Asc')
            ->get();
    }
}
