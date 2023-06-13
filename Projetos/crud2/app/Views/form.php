

    <h1 class="text-center mb-4">Formulário de Cadastro</h1>

    <div class="row justify-content-center">

      <div class="col-md-6">

        <form action="processar.php" method="POST">

          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar</button>

        </form>

      </div>
    </div>