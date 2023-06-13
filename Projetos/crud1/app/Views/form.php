<div class="card-header">
    <h1>Cadastro de Usuario</h1>
</div>
<div class="card-body">
    
   <?php echo form_open('usuario/store') ?>
   <div class="form-group">
    <label for="NOME">Nome</label>
    <input type="text" class="form-control" id="NOME" name="NOME" placeholder="Enter email" value="<?php echo isset ($clientes['ID']) ? $clientes['NOME'] : '' ?>">
  </div>
  <div class="form-group">
    <label for="EMAIL">Email</label>
    <input type="email" class="form-control" id="EMAIL" name="EMAIL" placeholder="Enter email" value="<?php echo isset ($clientes['ID']) ? $clientes['EMAIL'] : '' ?>">
  </div>
  <div class="form-group">
    <label for="SENHA">Senha</label>
    <input type="password" class="form-control" id="SENHA" name="SENHA" placeholder="Password" value="<?php echo isset ($clientes['ID']) ? $clientes['SENHA'] : '' ?>">
  </div>

  <input type="hidden" name="ID" value="<?php echo isset($clientes['ID']) ? $clientes['ID'] : '' ?>">

  <button type="submit" class="btn btn-primary">Submit</button>
  <?php form_close(); ?>
</div>