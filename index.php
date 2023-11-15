<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

  <title>Agenda</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">Contatos</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novo">Novo Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Contatos</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input type="hidden" name="page" value="pesquisar">
            <input class="form-control" type="search" placeholder="Pesquisar Contato" aria-label="Search" name="valor" id="valor">
            <button class="btn btn-outline-success me-2" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
          include('config.php');
          switch (@$_REQUEST["page"]) {
            case 'novo':
              include("novoContato.php");
              break;
            case 'listar':
              include("contatos.php");
              break;
            case 'salvar': 
              include("salvarContato.php");
              break;
            case 'editar': 
              include("editarContato.php");
              break;
            case 'pesquisar': 
              include("pesquisarContato.php");
              break;
            default:
              ?>
        <h1>Bem vindos!</h1>
        <?php
               break;
            }
        ?>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="js/script.js"></script>

</body>

</html>