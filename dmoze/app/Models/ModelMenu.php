<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMenu extends Model
{
    protected $table            = 'menu';
    protected $primaryKey       = 'menuid';
    protected $allowedFields    = [
        'menunama', 'menukategori', 'menudeskripsi', 'jenis_a', 'harga_a', 'jenis_b', 'harga_b', 'jenis_c', 'harga_c'
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;

    public function dataMenu()
    {
        return $this->table('menu')
            ->join('kategori', 'menukategori=katid', 'left')
            ->get();
    }
}
