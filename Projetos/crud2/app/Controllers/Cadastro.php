<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cadastro extends BaseController
{
    public function index()
    {   
        echo view('header');
        echo view('form');
        echo view('footer');
    }
}
