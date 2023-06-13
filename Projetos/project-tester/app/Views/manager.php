<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-nav me-auto">
           <button><i class="bi bi-alipay"></i></button>
        </div>
        <div class="navbar-nav me-auto">
            <button class="btn btn-success">
            <a class="nav-link active text-align-right" aria-current="page" href="#">Cadastrar Usuario</a>
            </button>
        </div>
    </div>
</nav>


<div class="container mt-4 ">
   

    <!-- Table -->
        <table class="table table-dark shadow-lg p-3 mb-5 bg-white rounded">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $usuario) : ?>
            <tr>
            <th scope="row"><?php echo $usuario['ID']; ?></th>
            <td><?php echo $usuario['NAME']; ?></td>
            <td><?php echo $usuario['EMAIL']; ?></td>
            <td>
                <a type="button" href="<?php echo base_url('UsuariosController/edit/' .  $usuario['ID']) ?>"><i class="bi bi-pencil-fill"></i></a>
                |
                <a type="button" href="<?php echo base_url('UsuariosController/delete/' . $usuario['ID']) ?>"><i class="bi bi-trash3-fill"></i></a>
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

</div>