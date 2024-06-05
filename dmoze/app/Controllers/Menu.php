<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKategori;
use App\Models\ModelMenu;
use CodeIgniter\HTTP\ResponseInterface;

class Menu extends BaseController
{

    public function index()
    {
        $modelMenu = new ModelMenu();

        $data = [
            'menu'          => 'Master',
            'submenu'       => 'Menu',
            'dataMenu'  => $modelMenu->dataMenu(),
        ];

        return view('menu/viewdata', $data);
    }

    // form tambah data
    function formMenuTambah()
    {
        $modelKategori = new ModelKategori();

        $data = [
            'dataKategori'      => $modelKategori->findAll()
        ];

        $json = [
            'data' => view('menu/modaltambah', $data)
        ];

        echo json_encode($json);
    }

    // Simpan data
    public function formMenuSimpan()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'menunama' => [
                    'rules'     => 'required',
                    'label'     => 'Menu',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'menukategori' => [
                    'rules'     => 'required',
                    'label'     => 'Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'harga_a' => [
                    'rules'     => 'required',
                    'label'     => 'Harga',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errMenuNama'           => $validation->getError('menunama'),
                        'errMenuKategori'       => $validation->getError('menukategori'),
                        'errHargaA'             => $validation->getError('harga_a'),
                    ]
                ];
            } else {

                $menunama           = $this->request->getPost('menunama');
                $menukategori       = $this->request->getPost('menukategori');
                $menudeskripsi      = $this->request->getPost('menudeskripsi');
                $jenis_a            = $this->request->getPost('jenis_a');
                $harga_a            = str_replace(".", "", $this->request->getPost('harga_a'));
                $jenis_b            = $this->request->getPost('jenis_b');
                $harga_b            = str_replace(".", "", $this->request->getPost('harga_b	'));
                $jenis_c            = $this->request->getPost('jenis_c');
                $harga_c            = str_replace(".", "", $this->request->getPost('harga_c'));


                $modelMenu = new ModelMenu();

                $modelMenu->insert([
                    'menunama'          => $menunama,
                    'menukategori'      => $menukategori,
                    'menudeskripsi'     => $menudeskripsi,
                    'jenis_a'           => $jenis_a,
                    'harga_a'           => $harga_a,
                    'jenis_b'           => $jenis_b,
                    'harga_b'           => $harga_b,
                    'jenis_c'           => $jenis_c,
                    'harga_c'           => $harga_c,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // form edit data
    function formMenuEdit($menuid)
    {
        $modelMenu  = new ModelMenu();
        $cekData = $modelMenu->find($menuid);


        $modelKategori = new ModelKategori();

        $data = [
            'menuid'            => $cekData['menuid'],
            'menunama'          => $cekData['menunama'],
            'menukategori'      => $cekData['menukategori'],
            'menudeskripsi'     => $cekData['menudeskripsi'],
            'jenis_a'           => $cekData['jenis_a'],
            'harga_a'           => $cekData['harga_a'],
            'jenis_b'           => $cekData['jenis_b'],
            'harga_b'           => $cekData['harga_b'],
            'jenis_c'           => $cekData['jenis_c'],
            'harga_c'           => $cekData['harga_c'],
            'dataKategori'      => $modelKategori->findAll()
        ];

        $json = [
            'data' => view('menu/modaledit', $data)
        ];

        echo json_encode($json);
    }

    // update data
    public function formMenuUpdate()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'menunama' => [
                    'rules'     => 'required',
                    'label'     => 'Menu',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'menukategori' => [
                    'rules'     => 'required',
                    'label'     => 'Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'harga_a' => [
                    'rules'     => 'required',
                    'label'     => 'Harga',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errMenuNama'           => $validation->getError('menunama'),
                        'errMenuKategori'       => $validation->getError('menukategori'),
                        'errHargaA'             => $validation->getError('harga_a'),
                    ]
                ];
            } else {

                $menuid             = $this->request->getPost('menuid');
                $menunama           = $this->request->getPost('menunama');
                $menukategori       = $this->request->getPost('menukategori');
                $menudeskripsi      = $this->request->getPost('menudeskripsi');
                $jenis_a            = $this->request->getPost('jenis_a');
                $harga_a            = str_replace(".", "", $this->request->getPost('harga_a'));
                $jenis_b            = $this->request->getPost('jenis_b');
                $harga_b            = str_replace(".", "", $this->request->getPost('harga_b	'));
                $jenis_c            = $this->request->getPost('jenis_c');
                $harga_c            = str_replace(".", "", $this->request->getPost('harga_c'));


                $modelMenu = new ModelMenu();

                $modelMenu->update($menuid, [
                    'menunama'          => $menunama,
                    'menukategori'      => $menukategori,
                    'menudeskripsi'     => $menudeskripsi,
                    'jenis_a'           => $jenis_a,
                    'harga_a'           => $harga_a,
                    'jenis_b'           => $jenis_b,
                    'harga_b'           => $harga_b,
                    'jenis_c'           => $jenis_c,
                    'harga_c'           => $harga_c,
                ]);

                $json = [
                    'sukses' => 'Data berhasil dirubah...'
                ];
            }


            echo json_encode($json);
        }
    }


    // Hapus data
    public function menuHapus($menuid)
    {
        $modelMenu = new ModelMenu();

        $modelMenu->delete($menuid);


        $json = [
            'sukses' => 'Data berhasil dihapus...'
        ];


        echo json_encode($json);
    }
}
