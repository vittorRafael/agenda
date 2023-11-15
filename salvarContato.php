<?php
  switch ($_REQUEST["acao"]) {
    case 'cadastrar':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];

      $sql = "INSERT INTO contatos (nome, email, telefone) values ('{$nome}', '{$email}', '{$telefone}')";

      $res = $conn->query($sql);

      if($res == true){
        print "<script>alert('Cadastrado com sucesso')</script>";
        print "<script>location.href='?page=listar'</script>";
      }else{
        print "<script>alert('Não foi possível cadastrar contato')</script>";
        print "<script>location.href='?page=listar'</script>";
      }

      break;
    case 'editar':
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];

      $sql = "UPDATE contatos set nome='{$nome}', email='{$email}', telefone='{$telefone}' WHERE id=".$_REQUEST['id'];

      $res = $conn->query($sql);

      if($res == true){
        print "<script>alert('Editado com sucesso')</script>";
        print "<script>location.href='?page=listar'</script>";
      }else{
        print "<script>alert('Não foi possível editar contato')</script>";
        print "<script>location.href='?page=listar'</script>";
      }

      break;
    case 'excluir':
      $sql = 'DELETE FROM contatos where id='.$_REQUEST['id'];
      $res = $conn->query($sql);

      if($res == true){
        print "<script>alert('Excluído com sucesso')</script>";
        print "<script>location.href='?page=listar'</script>";
      }else{
        print "<script>alert('Não foi possível excluir contato')</script>";
        print "<script>location.href='?page=listar'</script>";
      }
      break;
    default:
      # code...
      break;
  }
?>