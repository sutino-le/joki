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
            'menu'          => 'datalevel',
            'datalevel'     => $modelLevel->dataLevel()
        ];
        return view('level/level_view', $data);
    }

    // tambah
    function formTambahLevel()
    {

        $json = [
            'data' => view('level/level_tambah')
        ];

        echo json_encode($json);
    }

    // tambah simpan
    public function formTambahLevelSimpan()
    {
        if ($this->request->isAJAX()) {
            $levelnama       = $this->request->getPost('levelnama');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'levelnama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama Level',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errLevelNama'       => $validation->getError('levelnama'),
                    ]
                ];
            } else {
                $modelLevel = new ModelLevel();

                $cekLevel = $modelLevel->cekLevel($levelnama)->getRowArray();

                if (!empty($cekLevel)) {
                    $json = [
                        'error' => [
                            'errLevelNama'       => 'Nama Level sudah ada...',
                        ]
                    ];
                } else {
                    $modelLevel->insert([
                        'levelnama'      => $levelnama,
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
    function formLevelEdit($levelid)
    {

        $modelLevel = new ModelLevel();
        $cekData = $modelLevel->find($levelid);

        $data = [
            'levelid'           => $cekData['levelid'],
            'levelnama'         => $cekData['levelnama'],
        ];

        $json = [
            'data' => view('level/level_edit', $data)
        ];

        echo json_encode($json);
    }

    // edit simpan
    public function formEditLevelSimpan()
    {
        if ($this->request->isAJAX()) {
            $levelid       = $this->request->getPost('levelid');
            $levelnama       = $this->request->getPost('levelnama');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'levelnama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama Level',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errLevelNama'       => $validation->getError('levelnama'),
                    ]
                ];
            } else {
                $modelLevel = new ModelLevel();

                $cekLevelLama = $modelLevel->find($levelid);

                $cekLevel = $modelLevel->cekLevel($levelnama)->getRowArray();

                if ($levelnama != $cekLevelLama['levelnama'] and $cekLevel['levelnama'] == $levelnama) {
                    $json = [
                        'error' => [
                            'errLevelNama'       => 'Nama Level sudah ada...',
                        ]
                    ];
                } else {
                    $modelLevel->update($levelid, [
                        'levelnama'      => $levelnama,
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