<?php

namespace App\Controllers;

use App\Models\ModelKategori;
use App\Models\ModelMenu;

class Home extends BaseController
{
    public function index(): string
    {
        $modelKategori = new ModelKategori();
        $modelMenu = new ModelMenu();

        $data = [
            'dataKategori'      => $modelKategori->findAll(),
            'dataMenu'          => $modelMenu->findAll(),
        ];

        return view('index', $data);
    }
}
