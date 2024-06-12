<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKeranjang;
use App\Models\ModelMenu;
use App\Models\ModelPenjualan;
use App\Models\ModelPesanan;
use CodeIgniter\HTTP\ResponseInterface;

class Pesanan extends BaseController
{
    public function index()
    {
        $modelPesanan = new ModelPesanan();
        $data = [
            'menu'          => 'pesanan',
            'dataPesanan'     => $modelPesanan->dataPesan()
        ];
        return view('admin/pesanan_view', $data);
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
        $cekData = $modelKeranjang->dataKeranjang($userid)->getRowArray();
        if (empty($cekData['krn_tanggal'])) {
            $tanggal = date('Y-m-d');
        } else {
            $tanggal = $cekData['krn_tanggal'];
        }

        $data = [
            'tanggal'                   => $tanggal,
            'dataKeranjang'           => $modelKeranjang->dataKeranjang($userid),
        ];

        $json = [
            'data' => view('lihatkeranjang', $data)
        ];

        echo json_encode($json);
    }

    // pesanan proses
    public function pesananProses()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'User',
                    'errors'    => [
                        'required'  => 'Anda belum login...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'           => $validation->getError('userid'),
                    ]
                ];
            } else {

                $userid         = $this->request->getPost('userid');
                $tanggal        = $this->request->getPost('tanggal');
                $totalharga     = $this->request->getPost('totalharga');

                $modelPenjualan = new ModelPenjualan();

                $hasil = $modelPenjualan->nomorPenjualan($userid)->getRowArray();







                $modelKeranjang = new ModelKeranjang();
                $dataKeranjang       = $modelKeranjang->getWhere(['krn_userid' => $userid]);

                $fieldDetail = [];

                if (empty($hasil['pjl_nomor'])) {
                    $nomorSekarang =  1;
                } else {
                    $nomorSekarang = $hasil['pjl_nomor'] + 1;
                }

                foreach ($dataKeranjang->getResultArray() as $row) {
                    $fieldDetail[] = [
                        'psn_nomor'             => $nomorSekarang,
                        'psn_userid'            => $row['krn_userid'],
                        'psn_menuid'            => $row['krn_menuid'],
                        'psn_tanggal'           => $row['krn_tanggal'],
                        'psn_jumlah'            => $row['krn_jumlah'],
                        'psn_status'            => $row['krn_status'],
                        'psn_kurir'             => $row['krn_kurir'],
                    ];
                }

                $modelPesanan = new ModelPesanan();
                $modelPesanan->insertBatch($fieldDetail);


                // hapus temp barang masuk berdasarkan faktur
                $modelKeranjang->where(['krn_userid' => $userid]);
                $modelKeranjang->delete();


                $modelPenjualan->insert([
                    'pjl_nomor'            => $nomorSekarang,
                    'pjl_userid'           => $userid,
                    'pjl_tanggal'          => $tanggal,
                    'pjl_totalharga'       => $totalharga,
                ]);



                $json = [
                    'sukses' => 'Makanan berhasil dipesan...'
                ];
            }


            echo json_encode($json);
        }
    }
}
