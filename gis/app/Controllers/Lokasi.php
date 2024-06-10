<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLokasi;
use CodeIgniter\HTTP\ResponseInterface;

class Lokasi extends BaseController
{
    public function index()
    {
        $modelLokasi = new ModelLokasi();
        $data = [
            'menu'          => 'datalokasi',
            'datalokasi'     => $modelLokasi->dataLokasi()
        ];
        return view('lokasi/lokasi_view', $data);
    }

    // tambah
    function formTambahLokasi()
    {

        $json = [
            'data' => view('lokasi/lokasi_tambah')
        ];

        echo json_encode($json);
    }

    // tambah simpan
    public function formTambahLokasiSimpan()
    {
        if ($this->request->isAJAX()) {
            $loknama            = $this->request->getPost('loknama');
            $loklink            = $this->request->getPost('loklink');
            $lokdeskripsi       = $this->request->getPost('lokdeskripsi');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'loknama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama Lokasi',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'loklink' => [
                    'rules'     => 'required',
                    'label'     => 'Link',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errLokasiNama'       => $validation->getError('loknama'),
                        'errLokasiLink'       => $validation->getError('loklink'),
                    ]
                ];
            } else {
                $modelLokasi = new ModelLokasi();

                $modelLokasi->insert([
                    'loknama'           => $loknama,
                    'loklink'           => $loklink,
                    'lokdeskripsi'      => $lokdeskripsi,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // edit
    function formLokasiEdit($lokid)
    {

        $modelLokasi = new ModelLokasi();
        $cekData = $modelLokasi->find($lokid);

        $data = [
            'lokid'                 => $cekData['lokid'],
            'loknama'               => $cekData['loknama'],
            'loklink'               => $cekData['loklink'],
            'lokdeskripsi'          => $cekData['lokdeskripsi'],
        ];

        $json = [
            'data' => view('lokasi/lokasi_edit', $data)
        ];

        echo json_encode($json);
    }

    // edit simpan
    public function formEditLokasiSimpan()
    {
        if ($this->request->isAJAX()) {
            $lokid              = $this->request->getPost('lokid');
            $loknama            = $this->request->getPost('loknama');
            $loklink            = $this->request->getPost('loklink');
            $lokdeskripsi       = $this->request->getPost('lokdeskripsi');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'loknama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama Lokasi',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'loklink' => [
                    'rules'     => 'required',
                    'label'     => 'Link',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errLokasiNama'       => $validation->getError('loknama'),
                        'errLokasiLink'       => $validation->getError('loklink'),
                    ]
                ];
            } else {
                $modelLokasi = new ModelLokasi();

                $modelLokasi->update($lokid, [
                    'loknama'           => $loknama,
                    'loklink'           => $loklink,
                    'lokdeskripsi'      => $lokdeskripsi,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // Hapus data
    public function lokasiHapus($lokid)
    {
        $modelLokasi = new ModelLokasi();
        $modelLokasi->delete($lokid);

        $json = [
            'sukses' => 'Data berhasil dihapus...'
        ];


        echo json_encode($json);
    }




    // detail
    function detailLokasi($lokid)
    {

        $modelLokasi = new ModelLokasi();
        $cekData = $modelLokasi->find($lokid);

        $data = [
            'lokid'                 => $cekData['lokid'],
            'loknama'               => $cekData['loknama'],
            'loklink'               => $cekData['loklink'],
            'lokdeskripsi'          => $cekData['lokdeskripsi'],
        ];

        $json = [
            'data' => view('lokasi/lokasi_detail', $data)
        ];

        echo json_encode($json);
    }
}
