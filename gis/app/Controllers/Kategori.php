<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKategori;
use CodeIgniter\HTTP\ResponseInterface;

class Kategori extends BaseController
{
    public function index()
    {
        $modelKategori = new ModelKategori();
        $data = [
            'menu'          => 'datakategori',
            'datakategori'     => $modelKategori->dataKategori()
        ];
        return view('kategori/kategori_view', $data);
    }

    // tambah
    function formTambahKategori()
    {

        $json = [
            'data' => view('kategori/kategori_tambah')
        ];

        echo json_encode($json);
    }

    // tambah simpan
    public function formTambahKategoriSimpan()
    {
        if ($this->request->isAJAX()) {
            $katnama            = $this->request->getPost('katnama');
            $katdeskripsi       = $this->request->getPost('katdeskripsi');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'katnama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errKategoriNama'       => $validation->getError('katnama'),
                    ]
                ];
            } else {
                $modelKategori = new ModelKategori();

                $cekKategori = $modelKategori->cekKategori($katnama)->getRowArray();

                if (!empty($cekKategori)) {
                    $json = [
                        'error' => [
                            'errKategoriNama'       => 'Nama Kategori sudah ada...',
                        ]
                    ];
                } else {
                    $modelKategori->insert([
                        'katnama'           => $katnama,
                        'katdeskripsi'      => $katdeskripsi,
                    ]);

                    $json = [
                        'sukses' => 'Data berhasil disimpan...'
                    ];
                }
            }


            echo json_encode($json);
        }
    }

    // edit
    function formKategoriEdit($katid)
    {

        $modelKategori = new ModelKategori();
        $cekData = $modelKategori->find($katid);

        $data = [
            'katid'                 => $cekData['katid'],
            'katnama'               => $cekData['katnama'],
            'katdeskripsi'          => $cekData['katdeskripsi'],
        ];

        $json = [
            'data' => view('kategori/kategori_edit', $data)
        ];

        echo json_encode($json);
    }

    // edit simpan
    public function formEditKategoriSimpan()
    {
        if ($this->request->isAJAX()) {
            $katid              = $this->request->getPost('katid');
            $katnama            = $this->request->getPost('katnama');
            $katdeskripsi       = $this->request->getPost('katdeskripsi');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'katnama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errKategoriNama'       => $validation->getError('katnama'),
                    ]
                ];
            } else {
                $modelKategori = new ModelKategori();

                $cekKategoriLama = $modelKategori->find($katid);

                $cekKategori = $modelKategori->cekKategori($katnama)->getRowArray();

                if ($katnama != $cekKategoriLama['katnama'] and $cekKategori['katnama'] == $katnama) {
                    $json = [
                        'error' => [
                            'errKategoriNama'       => 'Nama Kategori sudah ada...',
                        ]
                    ];
                } else {
                    $modelKategori->update($katid, [
                        'katnama'           => $katnama,
                        'katdeskripsi'      => $katdeskripsi,
                    ]);

                    $json = [
                        'sukses' => 'Data berhasil disimpan...'
                    ];
                }
            }


            echo json_encode($json);
        }
    }

    // Hapus data
    public function kategoriHapus($katid)
    {
        $modelKategori = new ModelKategori();
        $modelKategori->delete($katid);

        $json = [
            'sukses' => 'Data berhasil dihapus...'
        ];


        echo json_encode($json);
    }
}
