<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class FilterPelanggan implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->level == '') {
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->level == 3) {
            return redirect()->to('/');
        }
    }
}
