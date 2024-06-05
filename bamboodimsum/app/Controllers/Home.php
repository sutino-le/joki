<?php

namespace App\Controllers;

use App\Models\ModelMenu;

class Home extends BaseController
{
    public function index(): string
    {
        $modelMenu = new ModelMenu();
        $data = [
            'dataMenu' => $modelMenu->findAll(),
        ];
        return view('index', $data);
    }
}
