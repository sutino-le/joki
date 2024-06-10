<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelIntelijen;
use App\Models\ModelKategori;
use App\Models\ModelLokasi;
use CodeIgniter\HTTP\ResponseInterface;

class Intelijen extends BaseController
{
    public function index()
    {
        $modelIntelijen = new ModelIntelijen();
        $data = [
            'menu'          => 'dataintelijen',
            'dataintelijen'     => $modelIntelijen->dataIntelijen()
        ];
        return view('intelijen/intelijen_view', $data);
    }

    // tambah
    function formTambahIntelijen()
    {
        $modelKategori = new ModelKategori();
        $modelLokasi = new ModelLokasi();

        $data = [
            'dataKategori'            => $modelKategori->findAll(),
            'dataLokasi'              => $modelLokasi->findAll(),
        ];

        $json = [
            'data' => view('intelijen/intelijen_tambah', $data)
        ];

        echo json_encode($json);
    }

    // tambah simpan
    public function formTambahIntelijenSimpan()
    {
        if ($this->request->isAJAX()) {
            $intel_judul            = $this->request->getPost('intel_judul');
            $intel_deskripsi        = $this->request->getPost('intel_deskripsi');
            $intel_katid            = $this->request->getPost('intel_katid');
            $intel_lokid            = $this->request->getPost('intel_lokid');
            $intel_tanggal          = $this->request->getPost('intel_tanggal');
            $intel_level            = $this->request->getPost('intel_level');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'intel_judul' => [
                    'rules'     => 'required',
                    'label'     => 'Judul',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_tanggal' => [
                    'rules'     => 'required',
                    'label'     => 'Tanggal',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_katid' => [
                    'rules'     => 'required',
                    'label'     => 'Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_lokid' => [
                    'rules'     => 'required',
                    'label'     => 'Lokasi',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_level' => [
                    'rules'     => 'required',
                    'label'     => 'Level',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errIntelijenJudul'         => $validation->getError('intel_judul'),
                        'errIntelijenTanggal'       => $validation->getError('intel_tanggal'),
                        'errIntelijenKategori'      => $validation->getError('intel_katid'),
                        'errIntelijenLokasi'        => $validation->getError('intel_lokid'),
                        'errIntelijenLevel'         => $validation->getError('intel_level'),
                    ]
                ];
            } else {
                $modelIntelijen = new ModelIntelijen();

                $modelIntelijen->insert([
                    'intel_judul'           => $intel_judul,
                    'intel_deskripsi'       => $intel_deskripsi,
                    'intel_katid'           => $intel_katid,
                    'intel_lokid'           => $intel_lokid,
                    'intel_tanggal'         => $intel_tanggal,
                    'intel_level'           => $intel_level,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // edit
    function formIntelijenEdit($intel_id)
    {


        $modelKategori = new ModelKategori();
        $modelLokasi = new ModelLokasi();

        $modelIntelijen = new ModelIntelijen();
        $cekData = $modelIntelijen->find($intel_id);

        $data = [
            'intel_id'                 => $cekData['intel_id'],
            'intel_judul'              => $cekData['intel_judul'],
            'intel_deskripsi'          => $cekData['intel_deskripsi'],
            'intel_katid'              => $cekData['intel_katid'],
            'intel_lokid'              => $cekData['intel_lokid'],
            'intel_tanggal'            => $cekData['intel_tanggal'],
            'intel_level'              => $cekData['intel_level'],
            'dataKategori'            => $modelKategori->findAll(),
            'dataLokasi'              => $modelLokasi->findAll(),
        ];

        $json = [
            'data' => view('intelijen/intelijen_edit', $data)
        ];

        echo json_encode($json);
    }

    // edit simpan
    public function formEditIntelijenSimpan()
    {
        if ($this->request->isAJAX()) {
            $intel_id               = $this->request->getPost('intel_id');
            $intel_judul            = $this->request->getPost('intel_judul');
            $intel_deskripsi        = $this->request->getPost('intel_deskripsi');
            $intel_katid            = $this->request->getPost('intel_katid');
            $intel_lokid            = $this->request->getPost('intel_lokid');
            $intel_tanggal          = $this->request->getPost('intel_tanggal');
            $intel_level            = $this->request->getPost('intel_level');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'intel_judul' => [
                    'rules'     => 'required',
                    'label'     => 'Judul',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_tanggal' => [
                    'rules'     => 'required',
                    'label'     => 'Tanggal',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_katid' => [
                    'rules'     => 'required',
                    'label'     => 'Kategori',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_lokid' => [
                    'rules'     => 'required',
                    'label'     => 'Lokasi',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'intel_level' => [
                    'rules'     => 'required',
                    'label'     => 'Level',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errIntelijenJudul'         => $validation->getError('intel_judul'),
                        'errIntelijenTanggal'       => $validation->getError('intel_tanggal'),
                        'errIntelijenKategori'      => $validation->getError('intel_katid'),
                        'errIntelijenLokasi'        => $validation->getError('intel_lokid'),
                        'errIntelijenLevel'         => $validation->getError('intel_level'),
                    ]
                ];
            } else {
                $modelIntelijen = new ModelIntelijen();

                $modelIntelijen->update($intel_id, [
                    'intel_judul'           => $intel_judul,
                    'intel_deskripsi'       => $intel_deskripsi,
                    'intel_katid'           => $intel_katid,
                    'intel_lokid'           => $intel_lokid,
                    'intel_tanggal'         => $intel_tanggal,
                    'intel_level'           => $intel_level,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // Hapus data
    public function intelijenHapus($intel_id)
    {
        $modelIntelijen = new ModelIntelijen();
        $modelIntelijen->delete($intel_id);

        $json = [
            'sukses' => 'Data berhasil dihapus...'
        ];


        echo json_encode($json);
    }

    // detail
    function detailIntelijen($intel_id)
    {

        $modelIntelijen = new ModelIntelijen();
        $cekData = $modelIntelijen->detailIntelijen($intel_id)->getRowArray();

        $data = [
            'intel_id'                  => $cekData['intel_id'],
            'intel_judul'               => $cekData['intel_judul'],
            'intel_deskripsi'           => $cekData['intel_deskripsi'],
            'katnama'                   => $cekData['katnama'],
            'loknama'                   => $cekData['loknama'],
            'loklink'                   => $cekData['loklink'],
            'intel_tanggal'             => $cekData['intel_tanggal'],
            'intel_level'               => $cekData['intel_level'],
        ];

        $json = [
            'data' => view('intelijen/intelijen_detail', $data)
        ];

        echo json_encode($json);
    }
}
