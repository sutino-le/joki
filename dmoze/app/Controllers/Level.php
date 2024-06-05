<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLevel;
use CodeIgniter\HTTP\ResponseInterface;

class Level extends BaseController
{

    public function index()
    {
        $modelLevel = new ModelLevel();

        $data = [
            'menu'          => 'Master User',
            'submenu'       => 'Level',
            'dataLevel'  => $modelLevel->dataLevel(),
        ];

        return view('level/viewdata', $data);
    }

    // form tambah data
    function formLevelTambah()
    {

        $json = [
            'data' => view('level/modaltambah')
        ];

        echo json_encode($json);
    }

    // Simpan data
    public function formLevelSimpan()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'levelnama' => [
                    'rules'     => 'required',
                    'label'     => 'Level',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errLevelNama'      => $validation->getError('levelnama'),
                    ]
                ];
            } else {

                $levelnama          = $this->request->getPost('levelnama');


                $modelLevel = new ModelLevel();

                $modelLevel->insert([
                    'levelnama'         => $levelnama,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // form edit data
    function formLevelEdit($levelid)
    {
        $modelLevel  = new ModelLevel();
        $cekData = $modelLevel->find($levelid);

        $data = [
            'levelid'     => $cekData['levelid'],
            'levelnama'   => $cekData['levelnama'],
        ];

        $json = [
            'data' => view('level/modaledit', $data)
        ];

        echo json_encode($json);
    }

    // update data
    public function formLevelUpdate()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'levelnama' => [
                    'rules'     => 'required',
                    'label'     => 'Level',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errLevelNama'      => $validation->getError('levelnama'),
                    ]
                ];
            } else {

                $levelid              = $this->request->getPost('levelid');
                $levelnama            = $this->request->getPost('levelnama');


                $modelLevel = new ModelLevel();

                $modelLevel->update($levelid, [
                    'levelnama'         => $levelnama,
                ]);

                $json = [
                    'sukses' => 'Data berhasil dirubah...'
                ];
            }


            echo json_encode($json);
        }
    }


    // Hapus data
    public function levelHapus($levelid)
    {
        $modelLevel = new ModelLevel();

        $modelLevel->delete($levelid);


        $json = [
            'sukses' => 'Data berhasil dihapus...'
        ];


        echo json_encode($json);
    }
}