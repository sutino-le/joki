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
            'menu'          => 'Master',
            'submenu'       => 'Kategori',
            'dataKategori'  => $modelKategori->dataKategori(),
        ];

        return view('kategori/viewdata', $data);
    }

    // form tambah data
    function formKategoriTambah()
    {

        $json = [
            'data' => view('kategori/modaltambah')
        ];

        echo json_encode($json);
    }

    // Simpan data
    public function formKategoriSimpan()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'katnama' => [
                    'rules'     => 'required',
                    'label'     => 'Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errKategoriNama'      => $validation->getError('katnama'),
                    ]
                ];
            } else {

                $katnama          = $this->request->getPost('katnama');


                $modelKategori = new ModelKategori();

                $modelKategori->insert([
                    'katnama'         => $katnama,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // form edit data
    function formKategoriEdit($katid)
    {
        $modelKategori  = new ModelKategori();
        $cekData = $modelKategori->find($katid);

        $data = [
            'katid'     => $cekData['katid'],
            'katnama'   => $cekData['katnama'],
        ];

        $json = [
            'data' => view('kategori/modaledit', $data)
        ];

        echo json_encode($json);
    }

    // update data
    public function formKategoriUpdate()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'katnama' => [
                    'rules'     => 'required',
                    'label'     => 'Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errKategoriNama'      => $validation->getError('katnama'),
                    ]
                ];
            } else {

                $katid              = $this->request->getPost('katid');
                $katnama            = $this->request->getPost('katnama');


                $modelKategori = new ModelKategori();

                $modelKategori->update($katid, [
                    'katnama'         => $katnama,
                ]);

                $json = [
                    'sukses' => 'Data berhasil dirubah...'
                ];
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
