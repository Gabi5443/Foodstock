<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.rtl.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="?page=novo">Novo Produto</a>
        <a class="nav-link" href="?page=listar">Listar Produto</a>
      </div>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
          case "novo":
            include("novo-produto.php");
          break;
          case "listar":
            include("listar-produto.php");
          break;
            case "salvar":
              include("salvar-produto.php");
          break;
          default:
            print "<h1>oi</h1>";
  }
?>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>