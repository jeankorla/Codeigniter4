<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;



class Usuario extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    
    public function index()
    {
        echo view('common/header');
        echo view('form');
        echo view('common/footer');
    }

    public function store()
    {
        $post = $this->request->getPost();


        $clientemodel = new ClienteModel();

        if ($clientemodel->save($post)) {
            // Cadastro realizado com sucesso
            $this->session->setFlashdata('success', 'Cliente cadastrado com sucesso.');

            // Redirecionamento para a página inicial
            return redirect()->to(base_url());

        } else {
            // Erro ao cadastrar
            echo 'Não foi possível cadastrar o usuário.';
        }
    }
        
    public function edit($id)
    {

        $clienteModel = new ClienteModel();

        $clientes = $clienteModel->find($id);

        if(is_null($clientes)){
            echo ('erro');
        }else{
            $session = session();
            $session->setFlashdata('success', 'Cliente atualizado com sucesso.');
        }


        echo view('common/header');
        echo view('form', ['clientes' => $clientes]);
        echo view('common/footer');


    }

    public function delete($id)
{
    $clienteModel = new ClienteModel();
    $cliente = $clienteModel->find($id);

    if ($cliente) {
        // Excluir o cliente
        $clienteModel->delete($id);

        // Definir mensagem de sucesso
        $this->session->setFlashdata('success', 'Cliente excluído com sucesso.');
    } else {
        // Cliente não encontrado
        $this->session->setFlashdata('error', 'Cliente não encontrado.');
    }

    // Redirecionar para a página inicial
    return redirect()->to(base_url());
}
    
}
