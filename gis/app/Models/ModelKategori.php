<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    protected $table            = 'kategori';
    protected $primaryKey       = 'katid';
    protected $allowedFields    = [
        'katnama', 'katdeskripsi'
    ];

    // Dates
    protected $useTimestamps = true;

    public function dataKategori()
    {
        return $this->table('kategori')
            ->join('data_intilejen', 'intel_katid=katid', 'left')
            ->get();
    }
}
