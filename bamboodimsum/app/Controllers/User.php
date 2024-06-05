<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLevel;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        $modeluser = new ModelUser();
        $data = [
            'menu'          => 'user',
            'dataUser'     => $modeluser->dataUser()
        ];
        return view('admin/user_view', $data);
    }


    // tambah
    function formTambahUser()
    {
        $modelLevel = new ModelLevel();
        $data = [
            'dataLevel'     => $modelLevel->findAll()
        ];

        $json = [
            'data' => view('admin/user_tambah', $data)
        ];

        echo json_encode($json);
    }

    // tambah simpan
    public function formTambahUserSimpan()
    {
        if ($this->request->isAJAX()) {
            $userid         = $this->request->getPost('userid');
            $usernama       = $this->request->getPost('usernama');
            $useremail      = $this->request->getPost('useremail');
            $userhp         = $this->request->getPost('userhp');
            $userpassword   = $this->request->getPost('userpassword');
            $useralamat     = $this->request->getPost('useralamat');
            $userlevel      = $this->request->getPost('userlevel');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'ID User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'usernama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'useremail' => [
                    'rules'     => 'required',
                    'label'     => 'Email',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userhp' => [
                    'rules'     => 'required',
                    'label'     => 'HP',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userpassword' => [
                    'rules'     => 'required',
                    'label'     => 'Kata Sandi',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userlevel' => [
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
                        'errUserID'         => $validation->getError('userid'),
                        'errUserNama'       => $validation->getError('usernama'),
                        'errUserEmail'      => $validation->getError('useremail'),
                        'errUserHP'         => $validation->getError('userhp'),
                        'errUserPassword'   => $validation->getError('userpassword'),
                        'errUserLevel'      => $validation->getError('userlevel'),
                    ]
                ];
            } else {
                $modelUserValidasi = new ModelUser();

                $cekUser = $modelUserValidasi->find($userid);

                if ($cekUser > 0) {
                    $json = [
                        'error' => [
                            'errUserId'         => 'ID sudah ada...',
                        ]
                    ];
                } else {
                    $inputUserValidasi = new ModelUser();
                    $inputUserValidasi->insert([
                        'userid'            => $userid,
                        'usernama'          => $usernama,
                        'useremail'         => $useremail,
                        'userhp'            => $userhp,
                        'userpassword'      => $userpassword,
                        'useralamat'        => $useralamat,
                        'userlevel'         => $userlevel,
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
    function formUserEdit($userid)
    {

        $modelUser = new ModelUser();
        $modelLevel = new ModelLevel();
        $cekData = $modelUser->find($userid);

        $data = [
            'userid'            => $cekData['userid'],
            'usernama'          => $cekData['usernama'],
            'useremail'         => $cekData['useremail'],
            'userhp'            => $cekData['userhp'],
            'userpassword'      => $cekData['userpassword'],
            'useralamat'        => $cekData['useralamat'],
            'userlevel'        => $cekData['userlevel'],
            'dataLevel'         => $modelLevel->findAll()
        ];

        $json = [
            'data' => view('admin/user_edit', $data)
        ];

        echo json_encode($json);
    }

    // edit simpan
    public function formEditUserSimpan()
    {
        if ($this->request->isAJAX()) {
            $userid         = $this->request->getPost('userid');
            $usernama       = $this->request->getPost('usernama');
            $useremail      = $this->request->getPost('useremail');
            $userhp         = $this->request->getPost('userhp');
            $userpassword   = $this->request->getPost('userpassword');
            $useralamat     = $this->request->getPost('useralamat');
            $userlevel      = $this->request->getPost('userlevel');

            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'ID User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'usernama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'useremail' => [
                    'rules'     => 'required',
                    'label'     => 'Email',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userhp' => [
                    'rules'     => 'required',
                    'label'     => 'HP',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userpassword' => [
                    'rules'     => 'required',
                    'label'     => 'Kata Sandi',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userlevel' => [
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
                        'errUserID'         => $validation->getError('userid'),
                        'errUserNama'       => $validation->getError('usernama'),
                        'errUserEmail'      => $validation->getError('useremail'),
                        'errUserHP'         => $validation->getError('userhp'),
                        'errUserPassword'   => $validation->getError('userpassword'),
                        'errUserLevel'      => $validation->getError('userlevel'),
                    ]
                ];
            } else {
                $modelUserValidasi = new ModelUser();

                $inputUserValidasi = new ModelUser();
                $inputUserValidasi->update($userid, [
                    'usernama'          => $usernama,
                    'useremail'         => $useremail,
                    'userhp'            => $userhp,
                    'userpassword'      => $userpassword,
                    'useralamat'        => $useralamat,
                    'userlevel'         => $userlevel,
                ]);

                $json = [
                    'sukses' => 'Data berhasil disimpan...'
                ];
            }


            echo json_encode($json);
        }
    }

    // Hapus data
    public function userHapus($userid)
    {
        $modelUser = new ModelUser();
        $modelUser->delete($userid);

        $json = [
            'sukses' => 'Data berhasil dihapus...'
        ];


        echo json_encode($json);
    }
}
