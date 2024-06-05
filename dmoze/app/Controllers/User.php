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
        $modelUser = new ModelUser();

        $data = [
            'menu'          => 'Master User',
            'submenu'       => 'User',
            'dataUser'  => $modelUser->dataUser(),
        ];

        return view('user/viewdata', $data);
    }

    // form tambah data
    function formUserTambah()
    {
        $modelLevel = new ModelLevel();

        $data = [
            'dataLevel'     => $modelLevel->findAll()
        ];

        $json = [
            'data' => view('user/modaltambah', $data)
        ];

        echo json_encode($json);
    }

    // Simpan data
    public function formUserSimpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'ID User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'usernama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'useremail' => [
                    'rules'     => 'required',
                    'label'     => 'Email',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'userhp' => [
                    'rules'     => 'required',
                    'label'     => 'Nomor HP',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'userpassword' => [
                    'rules'     => 'required',
                    'label'     => 'Password',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'userlevel' => [
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
                        'errUserID'         => $validation->getError('userid'),
                        'errUserNama'       => $validation->getError('usernama'),
                        'errUserEmail'      => $validation->getError('useremail'),
                        'errUserHP'         => $validation->getError('userhp'),
                        'errUserPassword'   => $validation->getError('userpassword'),
                        'errUserLevel'      => $validation->getError('userlevel'),
                    ]
                ];
            } else {

                $userid             = $this->request->getPost('userid');
                $usernama           = $this->request->getPost('usernama');
                $useremail          = $this->request->getPost('useremail');
                $userhp             = $this->request->getPost('userhp');
                $userpassword       = $this->request->getPost('userpassword');
                $userlevel          = $this->request->getPost('userlevel');


                $modelUser = new ModelUser();

                $cekData = $modelUser->find($userid);

                if ($cekData > 0) {
                    $json = [
                        'error' => [
                            'errUserID'         => 'User ID sudah ada...',
                        ]
                    ];
                } else {
                    $modelUser->insert([
                        'userid'         => $userid,
                        'usernama'       => $usernama,
                        'useremail'      => $useremail,
                        'userhp'         => $userhp,
                        'userpassword'   => $userpassword,
                        'userlevel'      => $userlevel,
                    ]);

                    $json = [
                        'sukses' => 'Data berhasil disimpan...'
                    ];
                }
            }


            echo json_encode($json);
        }
    }

    // form edit data
    function formUserEdit($userid)
    {
        $modelUser  = new ModelUser();
        $cekData = $modelUser->find($userid);


        $modelLevel = new ModelLevel();

        $data = [
            'userid'        => $cekData['userid'],
            'usernama'      => $cekData['usernama'],
            'useremail'     => $cekData['useremail'],
            'userhp'        => $cekData['userhp'],
            'userpassword'  => $cekData['userpassword'],
            'userlevel'     => $cekData['userlevel'],
            'dataLevel'     => $modelLevel->findAll()
        ];

        $json = [
            'data' => view('user/modaledit', $data)
        ];

        echo json_encode($json);
    }

    // update data
    public function formUserUpdate()
    {

        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'userid' => [
                    'rules'     => 'required',
                    'label'     => 'ID User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'usernama' => [
                    'rules'     => 'required',
                    'label'     => 'Nama User',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'useremail' => [
                    'rules'     => 'required',
                    'label'     => 'Email',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'userhp' => [
                    'rules'     => 'required',
                    'label'     => 'Nomor HP',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'userpassword' => [
                    'rules'     => 'required',
                    'label'     => 'Password',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...!'
                    ]
                ],
                'userlevel' => [
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
                        'errUserID'         => $validation->getError('userid'),
                        'errUserNama'       => $validation->getError('usernama'),
                        'errUserEmail'      => $validation->getError('useremail'),
                        'errUserHP'         => $validation->getError('userhp'),
                        'errUserPassword'   => $validation->getError('userpassword'),
                        'errUserLevel'      => $validation->getError('userlevel'),
                    ]
                ];
            } else {

                $userid             = $this->request->getPost('userid');
                $usernama           = $this->request->getPost('usernama');
                $useremail          = $this->request->getPost('useremail');
                $userhp             = $this->request->getPost('userhp');
                $userpassword       = $this->request->getPost('userpassword');
                $userlevel          = $this->request->getPost('userlevel');


                $modelUser = new ModelUser();
                $modelUser->update($userid, [
                    'usernama'       => $usernama,
                    'useremail'      => $useremail,
                    'userhp'         => $userhp,
                    'userpassword'   => $userpassword,
                    'userlevel'      => $userlevel,
                ]);

                $json = [
                    'sukses' => 'Data berhasil dirubah...'
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
