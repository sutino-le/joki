<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelIntelijen extends Model
{
    protected $table            = 'data_intilejen';
    protected $primaryKey       = 'intel_id';
    protected $allowedFields    = [
        'intel_judul', 'intel_deskripsi', 'intel_katid', 'intel_lokid', 'intel_tanggal', 'intel_level'
    ];

    // Dates
    protected $useTimestamps = true;

    public function dataIntelijen()
    {
        return $this->table('data_intilejen')
            ->join('kategori', 'katid=intel_katid', 'left')
            ->join('lokasi', 'lokid=intel_lokid', 'left')
            ->get();
    }



    public function detailIntelijen($intel_id)
    {
        return $this->table('data_intilejen')
            ->join('kategori', 'katid=intel_katid', 'left')
            ->join('lokasi', 'lokid=intel_lokid', 'left')
            ->getWhere([
                'intel_id' => $intel_id
            ]);
    }
}
