<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        $data = [
            'menu'          => 'dashboard',
        ];

        return view('dashboard', $data);
    }
}
