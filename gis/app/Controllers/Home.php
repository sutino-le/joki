<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Home extends BaseController
{
    public function index(): string
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
                        'errUserPassword'   => $validation->getError('userpassword'),
                    ]
                ];
            } else {
                $modelUser  = new ModelUser();

                $cekUser = $modelUser->find($userid);

                $cekUserPassword = $cekUser['userpassword'];

                if ($cekUser == null) {
                    $json = [
                        'error' => [
                            'errUserPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                        ]
                    ];
                } else if ($userpassword == $cekUserPassword) {

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
                            'errUserPassword'     => 'Maaf, ID pengguna / Kata Sandi salah!!!',
                        ]
                    ];
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
}
