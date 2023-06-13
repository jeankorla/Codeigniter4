<!-- Dentro da sua view 'home' -->
<?php if (isset($success)): ?>
    <div class="alert alert-success"><?= $success ?></div>
<?php endif; ?>




<div class="card-header">
    <h1>Cadastro de Usuario</h1>
</div>
<div class="card-body">
    <a href="usuario" class="btn btn-primary"> Cadastrar </a>
</div>
    <h2 style="text-align: center;">Lista de Cadastros</h2>
<div class="card-body">
    
<table class="table table-dark table-striped">
<thead>
    <tr>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>CRIADO</th>
        <th>EDITADO</th>
        <th>AÇÕES</th>
    </tr>
</thead>
    <?php foreach($clientes as $cliente): ?>
    <tr>
        <td><?php echo $cliente['NOME'] ?></td>
        <td><?php echo $cliente['EMAIL'] ?></td>
        <td><?php echo $cliente['created_at'] ?></td>
        <td><?php echo $cliente['updated_at'] ?></td>
        <td><?php echo anchor("usuario/edit/{$cliente['ID']}", 'Editar') ?>
        | <?php echo anchor("usuario/delete/{$cliente['ID']}", 'Excluir') ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>




</div>