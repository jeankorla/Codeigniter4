<?php
    
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;

class Home extends BaseController
{
    public function index()
    {

        $clienteModel = new ClienteModel();
        $clientes = $clienteModel->findAll();

        $session = session();
        $data['success'] = $session->getFlashdata('success');

        echo view('common/header');
        echo view('home', ['clientes' => $clientes, 'success' => $data['success']]);
        echo view('common/footer');
     }
}
