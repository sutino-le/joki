<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKeranjang;
use App\Models\ModelMenu;
use App\Models\ModelPesanan;
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
            'data' => view('formtambahkeranjang', $data)
        ];

        echo json_encode($json);
    }

    // tambahKeranjang simpan
    public function formTambahKeranjangSimpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'krn_jumlah' => [
                    'rules'     => 'required',
                    'label'     => 'Jumlah',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errJumlah'           => $validation->getError('krn_jumlah'),
                    ]
                ];
            } else {
                $krn_userid             = $this->request->getPost('userid');
                $krn_menuid             = $this->request->getPost('menuid');
                $krn_tanggal            = date("Y-m-d");
                $krn_jumlah             = $this->request->getPost('krn_jumlah');
                $krn_status             = 'Progress';

                $modelKeranjang = new ModelKeranjang();


                $modelKeranjang->insert([
                    'krn_userid'            => $krn_userid,
                    'krn_menuid'            => $krn_menuid,
                    'krn_tanggal'           => $krn_tanggal,
                    'krn_jumlah'            => $krn_jumlah,
                    'krn_status'            => $krn_status,
                ]);

                $json = [
                    'sukses' => 'Data berhasil ditambah...'
                ];
            }


            echo json_encode($json);
        }
    }

    // lihatKeranjang
    function lihatKeranjang($userid)
    {

        $modelKeranjang = new ModelKeranjang();

        $data = [
            'dataKeranjang'           => $modelKeranjang->dataKeranjang($userid),
        ];

        $json = [
            'data' => view('lihatkeranjang', $data)
        ];

        echo json_encode($json);
    }
}
