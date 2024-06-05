<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMenu;
use CodeIgniter\HTTP\ResponseInterface;

class Pesanan extends BaseController
{
    public function index()
    {
        //
    }

    // tambahKeranjang
    function tambahKeranjang($menuid)
    {

        $modelMenu = new ModelMenu();
        $cekData = $modelMenu->find($menuid);

        $data = [
            'menuid'           => $cekData['menuid'],
            'menunama'         => $cekData['menunama'],
            'menudeskripsi'    => $cekData['menudeskripsi'],
            'menuharga'        => $cekData['menuharga'],
            'menufoto'         => $cekData['menufoto'],
        ];

        $json = [
            'data' => view('admin/menu_edit', $data)
        ];

        echo json_encode($json);
    }
}
