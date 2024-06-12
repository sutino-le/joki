<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPenjualan;
use App\Models\ModelPesanan;
use CodeIgniter\HTTP\ResponseInterface;

class Pengantaran extends BaseController
{
    public function index()
    {
        $modelPenjualan = new ModelPenjualan();
        $data = [
            'menu'                  => 'pengantaran',
            'dataPengantaran'       => $modelPenjualan->dataPengantaran()
        ];
        return view('admin/pengantaran_view', $data);
    }
}
