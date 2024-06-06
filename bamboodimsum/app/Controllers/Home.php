<?php

namespace App\Controllers;

use App\Models\ModelMenu;
use App\Models\ModelPesanan;

class Home extends BaseController
{
    public function index(): string
    {
        $userid = session()->userid;

        $modelMenu = new ModelMenu();

        $modelPesanan = new ModelPesanan();






        $data = [
            'dataMenu'              => $modelMenu->findAll(),
            'dataPesanan'         => $modelPesanan->dataPesanan($userid),
        ];
        return view('index', $data);
    }
}