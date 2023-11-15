<h1>Listar Contatos</h1>

<?php
  $valor = $_REQUEST['valor'];
  $sql = "select * from contatos where nome like '%{$valor}%' or email like '%{$valor}%' or telefone like '%{$valor}%'";

  $res = $conn->query($sql);

  $qtd = $res->num_rows;

  if($qtd > 0){
    $count = 1;
    ?>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = $res->fetch_object()){
      print "<tr>";
      print "<td>".$count."</td>";
      print "<td>".$row->nome."</td>";
      print "<td>".$row->email."</td>";
      print "<td>".$row->telefone."</td>";
      print "<td>
        <button onclick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success'>Editar</button>
        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."'}else{false}\" class='btn btn-danger'>Excluir</button>
      </td>";
      print "</tr>";
      $count++;
    }

    ?>
  </tbody>
</table>
<?php
  }else{
    print "<p class='alert alert-danger'>Não existe contatos com o valor pesquisado!!</p>";
  }
?>