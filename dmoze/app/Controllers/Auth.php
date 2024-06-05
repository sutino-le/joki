<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    // index
    public function index()
    {
        return view('auth/login');
    }

    // cek user
    function authCekUser()
    {
        if ($this->request->isAJAX()) {
            $userid = $this->request->getPost('userid');
            $password = $this->request->getPost('password');

            $validation = \Config\Services::validation();



            $valid = $this->validate([
                'userid'    => [
                    'label'     => 'User',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} can not be empty'
                    ]
                ],
                'password'    => [
                    'label'     => 'Password',
                    'rules'     => 'required',
                    'errors'    => [
                        'required'  => '{field} can not be empty'
                    ]
                ]
            ]);

            if (!$valid) {
                $json = [
                    'error' => [
                        'errUserID'     => $validation->getError('userid'),
                        'errPassword'   => $validation->getError('password'),
                    ]
                ];
            } else {
                $modelUser  = new ModelUser();

                $cekUser = $modelUser->find($userid);

                if ($cekUser == null) {
                    $json = [
                        'error' => [
                            'errUserID'     => 'Sorry, user id is wrong!!!',
                            'errPassword'     => 'Sorry, your password is wrong!!!',
                        ]
                    ];
                } else if ($cekUser['userlevel'] == '2') {
                    $json = [
                        'error' => [
                            'errUserID'     => 'Sorry, user id is wrong!!!',
                            'errPassword'     => 'Sorry, your password is wrong!!!',
                        ]
                    ];
                } else {
                    $passwordUser = $cekUser['userpassword'];
                    if ($password == $passwordUser) {

                        // simpan session
                        $simpan_session = [
                            'userid'    => $userid,
                            'usernama'  => $cekUser['usernama'],
                            'level'  => $cekUser['userlevel'],
                        ];
                        session()->set($simpan_session);

                        $json = [
                            'sukses' => 'You have successfully logged in...'
                        ];
                    } else {
                        $json = [
                            'error' => [
                                'errUserID'     => 'Sorry, user id is wrong!!!',
                                'errPassword'     => 'Sorry, your password is wrong!!!',
                            ]
                        ];
                    }
                }
            }

            return json_encode($json);
        }
    }




    // logout
    public function Logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
