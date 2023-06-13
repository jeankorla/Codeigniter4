<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;

class UsuariosController extends BaseController
{
   public function create()
{   
    $id = $this->request->getPost('ID');
    $name = $this->request->getPost('NAME');
    $email = $this->request->getPost('EMAIL');
    $password = $this->request->getPost('PASSWORD');

    $usuarioModel = new Usuario();

    // Verificar se o ID existe e se o usuário correspondente foi encontrado
    if (!empty($id) && $usuarioModel->find($id)) {
        // Editar usuário existente
        $usuario = [
            'NAME' => $name,
            'EMAIL' => $email
        ];
        // Verifique se é necessário atualizar a senha apenas se ela foi fornecida
        if (!empty($password)) {
            $usuario['PASSWORD'] = $password;
        }
        $usuarioModel->update($id, $usuario);
    } else {
        // Criar novo usuário
        $usuario = [
            'NAME' => $name,
            'EMAIL' => $email,
            'PASSWORD' => $password
        ];
        $usuarioModel->save($usuario);
    }

    // Redirecionar para a página inicial ou qualquer outra página desejada
    return redirect()->to('Home/index');
}


    public function edit($id)
    {
        
    $usuarioModel = new Usuario();
    $usuario = $usuarioModel->find($id);

    $data = [
        'usuario' => $usuario
    ];

    echo view('common/header');
    echo view('register_master', $data);
    echo view('common/footer');
    }

    public function delete($id)
{
    $usuarioModel = new Usuario();
    $usuario = $usuarioModel->find($id);

    if ($usuario) {
        $usuarioModel->delete($id);
    }

    // Redirecionar para a página inicial ou qualquer outra página desejada após a exclusão
    return redirect()->to('Home/index');
}

}
