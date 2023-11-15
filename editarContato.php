<h1>Editar Contato</h1>

<?php 
  $sql = 'select * from contatos where id='.$_REQUEST['id'];
  $res = $conn->query($sql);

  $row = $res->fetch_object();
  
?>

<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id ?>">
  <div class="mb-3">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" class="form-control" value="<?php print $row->nome ?>">
  </div>
  <div class="mb-3">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" class="form-control" value="<?php print $row->email ?>">
  </div>
  <div class="mb-3">
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" id="telefone" class="form-control" maxlength="15" value="<?php print $row->telefone ?>">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-success">Editar</button>
  </div>
</form>