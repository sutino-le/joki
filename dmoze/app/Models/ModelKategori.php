<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    protected $table            = 'kategori';
    protected $primaryKey       = 'katid';
    protected $allowedFields    = ['katnama'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;


    public function dataKategori()
    {
        return $this->table('kategori')
            ->join('menu', 'katid=menukategori', 'left')
            ->groupBy('katid')
            ->get();
    }
}
