<?php

session_start();
//include('../controller/verifica_login.php');
if(!$_SESSION['usuario']){
    header('Location: ../index.php');
    exit;
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Sistema</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foΩΩ-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/Style.css">
  <link rel="shortcut icon" href="img/Logo site preto.png">
  <style>
    .foto_perfil{
      border-radius: 100%;
    }
  </style>
</head>

<body style="background-color: #e6e6e6">

  <!-- M e n u - e - L o g o -->

  <nav class="navbar navbar-expand-md navbar-light shadow p-3 bg-white">

    <!-- L o g o t i p o -->

    <div class="container">
      <a class="navbar-brand text-primary" href="painel.php">
        <img src="img/Logo site Original.png" width="100px" height="100px" class="">
        <b></b>
      </a>

      <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- M e n u - E s c r i t o -->

      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav ml-auto font-weight-bold">
          <li class="nav-item">
            <a class="nav-link" href="painel.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastroinfo.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="novo_user.php">Perfil</a>
          </li>

          <!--Mudar Botão Login -->

          <li class="nav-item">
            <a class="nav-link bg-danger text-light" href="../controller/logout.php">SAIR</a>
          </li>

      </div>
    </div>
  </nav>

  <!-- Informações do Cliente -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-5 col-sm-12 bg-info shadow-lg p-3 mb-5 rounded text-center">

        <img src="img/Logo site branco.jpg" alt="foto de perfil do usúario" width="120px" height="120px" class="foto_perfil">
        <div class="card-body">';

        <h3>Usuário Logado:</h3>

          <h6 class="lead" ><strong><?php echo $_SESSION['usuario']; ?></strong></h6>
        </div>
      </div>

      <!-- Area de listagem-->

      <div class="col-xl-9 col-lg-8 col-sm-12 card bg-light shadow-lg p-3 mb-5 rounded">
        <?php
            require_once("../controller/controllerinfo.php");
            $objControllerFunc = new controllerInfo();
            $objControllerFunc->getTodosFunc();
        ?>

      </div>
    </div>
  </div>

      <!-- F i n a l -->

      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-2">Juan archangelo © 2023 - Todos os direitos reservados</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>