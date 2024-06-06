<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesanan;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {

        $modelPesanan = new ModelPesanan();




        $data = [
            'menu'              => 'dashboard',
            'daftarPesanan'     => $modelPesanan->daftarPesanan(),
        ];
        return view('admin/dashboard', $data);
    }
}
