<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKategori;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        $modelKategori = new ModelKategori();

        $data = [
            'menu'              => 'dashboard',
            'dataKategori'      => $modelKategori->findAll(),
        ];

        return view('dashboard', $data);
    }
}
