<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }



    //form Login
    function cekUser()
    {
        if ($this->request->isAJAX()) {
            $userid = $this->request->getPost('userid');
            $userpassword = $this->request->getPost('userpassword');

            $validation = \Config\Services::validation();



            $valid = $this->validate([
                'userid'    => [
                    'label'     => 'ID User',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userpassword'    => [
                    'label'     => 'Password',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ]
            ]);

            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'     => $validation->getError('userid'),
                        'errPassword'   => $validation->getError('userpassword'),
                    ]
                ];
            } else {
                $modelUser  = new ModelUser();

                $cekUser = $modelUser->find($userid);

                if ($cekUser == null) {
                    $json = [
                        'error' => [
                            'errPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                        ]
                    ];
                } else if ($cekUser['userlevel'] == '3') {
                    $json = [
                        'error' => [
                            'errPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                        ]
                    ];
                } else {
                    $cekUserPassword = $cekUser['userpassword'];
                    if ($userpassword == $cekUserPassword) {

                        // simpan session
                        $simpan_session = [
                            'userid'    => $userid,
                            'usernama'  => $cekUser['usernama'],
                            'level'  => $cekUser['userlevel'],
                        ];
                        session()->set($simpan_session);

                        $json = [
                            'sukses' => 'Anda telah berhasil login...'
                        ];
                    } else {
                        $json = [
                            'error' => [
                                'errPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                            ]
                        ];
                    }
                }
            }

            return json_encode($json);
        }
    }


    public function Logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }



    public function loginPelanggan()
    {
        return view('login_pelanggan');
    }



    //form Login
    function cekUserPelanggan()
    {
        if ($this->request->isAJAX()) {
            $userid = $this->request->getPost('userid');
            $userpassword = $this->request->getPost('userpassword');

            $validation = \Config\Services::validation();



            $valid = $this->validate([
                'userid'    => [
                    'label'     => 'ID User',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ],
                'userpassword'    => [
                    'label'     => 'Password',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} tidak boleh kosong...'
                    ]
                ]
            ]);

            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'     => $validation->getError('userid'),
                        'errPassword'   => $validation->getError('userpassword'),
                    ]
                ];
            } else {
                $modelUser  = new ModelUser();

                $cekUser = $modelUser->find($userid);

                if ($cekUser == null) {
                    $json = [
                        'error' => [
                            'errPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                        ]
                    ];
                } else if ($cekUser['userlevel'] == '3') {
                    $cekUserPassword = $cekUser['userpassword'];
                    if ($userpassword == $cekUserPassword) {

                        // simpan session
                        $simpan_session = [
                            'userid'    => $userid,
                            'usernama'  => $cekUser['usernama'],
                            'level'  => $cekUser['userlevel'],
                        ];
                        session()->set($simpan_session);

                        $json = [
                            'sukses' => 'Anda telah berhasil login...'
                        ];
                    } else {
                        $json = [
                            'error' => [
                                'errPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                            ]
                        ];
                    }
                } else {
                    $json = [
                        'error' => [
                            'errPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                        ]
                    ];
                }
            }

            return json_encode($json);
        }
    }



    public function registrasi()
    {
        return view('registrasi');
    }



    // registrasi
    public function registrasiSimpan()
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
                'useralamat' => [
                    'rules'     => 'required',
                    'label'     => 'Alamat',
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
            ]);


            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'         => $validation->getError('userid'),
                        'errUserNama'       => $validation->getError('usernama'),
                        'errUserEmail'      => $validation->getError('useremail'),
                        'errUserHP'         => $validation->getError('userhp'),
                        'errUserAlamat'      => $validation->getError('useralamat'),
                        'errPassword'   => $validation->getError('userpassword'),
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
                        'userlevel'         => '3',
                    ]);

                    $json = [
                        'sukses' => 'Registrasi berhasil...'
                    ];
                }
            }


            echo json_encode($json);
        }
    }
}
