<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPesanan;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {

        $modelPesanan = new ModelPesanan();

        $data = [
            'menu'                      => 'dashboard',
            'daftarPesanan'             => $modelPesanan->daftarPesanan(),
            'daftarPesananProses'       => $modelPesanan->daftarPesananProses(),
        ];
        return view('admin/dashboard', $data);
    }

    // tentukan kurir
    function tentukanKurir($psn_nomor)
    {
        $modelPesanan = new ModelPesanan();
        $cekDataPesanan = $modelPesanan->dataPesananProgres($psn_nomor)->getRowArray();

        $modelUser = new ModelUser();


        $data = [
            'psn_nomor'             => $cekDataPesanan['psn_nomor'],
            'usernama'              => $cekDataPesanan['usernama'],
            'menunama'              => $cekDataPesanan['menunama'],
            'psn_tanggal'           => $cekDataPesanan['psn_tanggal'],
            'psn_jumlah'            => $cekDataPesanan['psn_jumlah'],
            'menuharga'             => $cekDataPesanan['menuharga'],
            'psn_status'            => $cekDataPesanan['psn_status'],
            'pjl_totalharga'        => $cekDataPesanan['pjl_totalharga'],
            'useralamat'            => $cekDataPesanan['useralamat'],
            'datakurir'             => $modelUser->dataKurir(),
        ];

        $json = [
            'data' => view('admin/dashboardkurir', $data)
        ];

        echo json_encode($json);
    }

    // tentukan kurir
    public function tentukanKurirSimpan()
    {
        if ($this->request->isAJAX()) {
            $userid       = $this->request->getPost('userid');
            $psn_nomor       = $this->request->getPost('psn_nomor');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'       => $validation->getError('userid'),
                    ]
                ];
            } else {

                $modelPesanan = new ModelPesanan();
                $dataPesanan       = $modelPesanan->getWhere(['psn_nomor' => $psn_nomor]);

                $fieldDetail = [];

                foreach ($dataPesanan->getResultArray() as $row) {
                    $fieldDetail[] = [
                        'psn_nomor'                 => $psn_nomor,
                        'psn_status'                => 'Pesanan diproses',
                        'psn_kurir'                 => $userid,
                    ];
                }

                $modelPesanan = new ModelPesanan();
                $modelPesanan->updateBatch($fieldDetail, 'psn_nomor');

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // dashboard kurir
    public function dasboardKurir()
    {

        $kurir = session()->userid;
        $modelPesanan = new ModelPesanan();



        $data = [
            'menu'                     => 'dashboard',
            'daftarPengantaran'        => $modelPesanan->dataPengantaran($kurir),
        ];
        return view('dashboardKurir', $data);
    }


    // edit
    function datailPesanan($psn_nomor)
    {

        $modelPesanan = new ModelPesanan();

        $data = [
            'detailPesanan'           => $modelPesanan->dataPesananProgres($psn_nomor),
        ];

        $json = [
            'data' => view('detailpesanan', $data)
        ];

        echo json_encode($json);
    }

    // pesan diantar
    public function pesananDiantar()
    {
        if ($this->request->isAJAX()) {
            $userid       = $this->request->getPost('userid');
            $psn_nomor       = $this->request->getPost('psn_nomor');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'       => $validation->getError('userid'),
                    ]
                ];
            } else {

                $modelPesanan = new ModelPesanan();
                $dataPesanan       = $modelPesanan->getWhere(['psn_nomor' => $psn_nomor]);

                $fieldDetail = [];

                foreach ($dataPesanan->getResultArray() as $row) {
                    $fieldDetail[] = [
                        'psn_nomor'                 => $psn_nomor,
                        'psn_status'                => 'Pesanan diantar',
                        'psn_kurir'                 => $userid,
                    ];
                }

                $modelPesanan = new ModelPesanan();
                $modelPesanan->updateBatch($fieldDetail, 'psn_nomor');

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // pesan selesai
    public function pesananSelesai()
    {
        if ($this->request->isAJAX()) {
            $userid       = $this->request->getPost('userid');
            $psn_nomor       = $this->request->getPost('psn_nomor');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'       => $validation->getError('userid'),
                    ]
                ];
            } else {

                $modelPesanan = new ModelPesanan();
                $dataPesanan       = $modelPesanan->getWhere(['psn_nomor' => $psn_nomor]);

                $fieldDetail = [];

                foreach ($dataPesanan->getResultArray() as $row) {
                    $fieldDetail[] = [
                        'psn_nomor'                 => $psn_nomor,
                        'psn_status'                => 'Pesanan Selesai',
                        'psn_kurir'                 => $userid,
                    ];
                }

                $modelPesanan = new ModelPesanan();
                $modelPesanan->updateBatch($fieldDetail, 'psn_nomor');

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }
}
