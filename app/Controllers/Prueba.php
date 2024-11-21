<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Prueba extends BaseController
{
    public function index()
    {
        return view('front');
    }
}
