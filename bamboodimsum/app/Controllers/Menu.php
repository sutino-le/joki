<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMenu;
use CodeIgniter\HTTP\ResponseInterface;

class Menu extends BaseController
{

    public function index()
    {
        $modelMenu = new ModelMenu();
        $data = [
            'menu'          => 'menumakanan',
            'dataMenu'     => $modelMenu->dataMenu()
        ];
        return view('admin/menu_view', $data);
    }

    // tambah
    function formTambahMenu()
    {

        $json = [
            'data' => view('admin/menu_tambah')
        ];

        echo json_encode($json);
    }

    // tambah simpan
    public function formTambahMenuSimpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'menunama' => [
                    'rules'     => 'required',
                    'label'     => 'Menu',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'menuharga' => [
                    'rules'     => 'required',
                    'label'     => 'Harga',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'menufoto' => [
                    'rules'     => 'uploaded[menufoto]|max_size[menufoto,1024]|is_image[menufoto]',
                    'label'     => 'Gambar',
                    'errors'    => [
                        'uploaded'  => '{field} tidak boleh kosong',
                        'max_size'  => 'Maksimal {field} besar foto 1024 KB',
                        'uploaded'  => 'Jenis file harus berupa gambar',
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errMenuNama'           => $validation->getError('menunama'),
                        'errMenuHarga'          => $validation->getError('menuharga'),
                        'errMenuFoto'           => $validation->getError('menufoto'),
                    ]
                ];
            } else {

                $menunama           = $this->request->getPost('menunama');
                $menuharga          = str_replace(".", "", $this->request->getPost('menuharga'));
                $menudeskripsi      = $this->request->getPost('menudeskripsi');
                $menufoto           = $this->request->getFile('menufoto');

                $newName = $menufoto->getRandomName();
                $menufoto->move('upload', $newName);





                $modelMenu = new ModelMenu();

                $modelMenu->insert([
                    'menunama'          => $menunama,
                    'menuharga'         => $menuharga,
                    'menudeskripsi'     => $menudeskripsi,
                    'menufoto'          => $menufoto->getName(),
                ]);

                $json = [
                    'sukses' => 'Data berhasil ditambah...'
                ];
            }


            echo json_encode($json);
        }
    }

    // edit
    function formMenuEdit($menuid)
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

    // edit simpan
    public function formEditMenuSimpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'menunama' => [
                    'rules'     => 'required',
                    'label'     => 'Menu',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'menuharga' => [
                    'rules'     => 'required',
                    'label'     => 'Harga',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'menufoto' => [
                    'rules'     => 'uploaded[menufoto]|max_size[menufoto,1024]|is_image[menufoto]',
                    'label'     => 'Gambar',
                    'errors'    => [
                        'uploaded'  => '{field} tidak boleh kosong',
                        'max_size'  => 'Maksimal {field} besar foto 1024 KB',
                        'uploaded'  => 'Jenis file harus berupa gambar',
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errMenuNama'           => $validation->getError('menunama'),
                        'errMenuHarga'          => $validation->getError('menuharga'),
                        'errMenuFoto'           => $validation->getError('menufoto'),
                    ]
                ];
            } else {

                $menuid             = $this->request->getPost('menuid');
                $menunama           = $this->request->getPost('menunama');
                $menuharga          = str_replace(".", "", $this->request->getPost('menuharga'));
                $menudeskripsi      = $this->request->getPost('menudeskripsi');
                $menufoto           = $this->request->getFile('menufoto');

                $newName = $menufoto->getRandomName();
                $menufoto->move('upload', $newName);





                $modelMenu = new ModelMenu();


                $cekData = $modelMenu->find($menuid);

                unlink('upload/' . $cekData['menufoto']);

                $modelMenu->update($menuid, [
                    'menunama'          => $menunama,
                    'menuharga'         => $menuharga,
                    'menudeskripsi'     => $menudeskripsi,
                    'menufoto'          => $menufoto->getName(),
                ]);

                $json = [
                    'sukses' => 'Data berhasil dirubah...'
                ];
            }


            echo json_encode($json);
        }
    }

    // Hapus data
    public function MenuHapus($menuid)
    {
        $modelMenu = new ModelMenu();


        $cekData = $modelMenu->find($menuid);


        $modelMenu->delete($menuid);

        unlink('upload/' . $cekData['menufoto']);

        $json = [
            'sukses' => 'Data berhasil dihapus...'
        ];


        echo json_encode($json);
    }
}
