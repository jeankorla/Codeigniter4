<?php

namespace App\Controllers;
use App\Models\Usuario;

class Home extends BaseController
{
    public function index()
    {   

        $usuarioModel = new Usuario();
        $usuarios = $usuarioModel->findAll();

        $list = [
            'list' => $usuarios
        ];

        echo view('common/header');
        echo view('manager', $list);
        echo view('common/footer');
    }
    
}
