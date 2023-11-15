<h1>Novo Contato</h1>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-3">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control">
  </div>
  <div class="mb-3">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" class="form-control" maxlength="15">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>