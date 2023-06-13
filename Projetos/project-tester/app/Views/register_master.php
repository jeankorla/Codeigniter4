<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-nav me-auto">
           <button><i class="bi bi-alipay"></i></button>
        </div>
        <div class="navbar-nav me-auto">
            <button class="btn btn-success">
            <a class="nav-link active text-align-right" aria-current="page" href="#">Listar Usuários</a>
            </button>
        </div>
    </div>
</nav>


<div class="container mt-4">

    <?php echo form_open(base_url('UsuariosController/create')); ?>

    <h1 class="mt-4">Register</h1>

      <!-- Name input -->
  <div class="form-outline mb-4 mt-4">
    <input type="text" id="NAME" name="NAME" class="form-control" value="<?php echo isset($usuario['NAME']) ? $usuario['NAME'] : ''; ?>" />
    <label class="form-label" for="NAME">Name</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4 mt-4">
    <input type="email" id="EMAIL" name="EMAIL" class="form-control" value="<?php echo isset($usuario['EMAIL']) ? $usuario['EMAIL'] : ''; ?>" />
    <label class="form-label" for="EMAIL">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="PASSWORD" name="PASSWORD" class="form-control" value="" />
    <label class="form-label" for="PASSWORD">Password</label>
  </div>

    <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">

    <input type="hidden" name="ID" value="<?php echo isset($usuario['ID']) ? $usuario['ID'] : ''; ?>">

    <!-- Submit button -->
    <button type="submit" class=" col-8 btn btn-primary btn-block mb-4">Sign Up</button>
    </div>


 
  </div>
<?php echo form_close();?>

</div>