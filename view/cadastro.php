<!DOCTYPE html>
<?php
session_start();
?>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Cadastro - TecEstagio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="estilo/estilo.css">
  <link rel="shortcut icon" href="img/favicon.ico">

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
            <a class="nav-link" href="cadastroinfo.php">Cadastro de produtos</a>
          </li>

          <!--Mudar Botão Login -->

          <li class="nav-item">
            <a class="nav-link bg-danger text-light" href="../controller/logout.php">SAIR</a>
          </li>

      </div>
    </div>
  </nav>

  <!-- Pagina Completa-->

  <div class="" style="margin-top: 75px;">
    <div class="container">

      <!-- Titulo -->
      <div class="row">
        <div class="col-md-8 p-4">
          <h1>Faça seu Cadastro</h1>
        </div>
      </div>

      <!-- Cadastro Completo -->

      <div class="row">

        <!-- Informações do Cadastro -->

        <div class="col-md-7 p-4">
          <h3 class="mb-3">Cadastre-se</h3>

          <!-- Formulario de Cadastro -->

          <form id="formCadastro" name="formCadastro" action="../controller/ControllerUser.php" method="POST">

            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
              </div>

              <div class="form-group col-md-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
              </div>

            <!-- S e n h a -->

            <div class="form-group col-md-6">

              <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">

            </div>

            <!-- B o t õ e s -->
        
            <button type="reset" class="btn btn-danger">Limpar</button>
            <button type="submit" class="btn btn-success font-weight-bold" name="enviar" onclick="return validar()">Enviar</button>
            <input type="hidden" id="_incluir" name="_incluir" value="_incluir">

          </form>

        </div>
      </div>
    </div>
  </div>

            <!-- F i n a l -->

            <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-2">Juan Archangelo © 2022 - Todos os direitos reservados</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <!-- L i n k s -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>

  <!-- M A S C A R A - E M - J A V A S C R I P T -->

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#cpf").mask("000.000.000-00")
      $("#cnpj").mask("00.000.000/0000-00")
      $("#sal").mask("999.999.990,00", {
        reverse: true
      })
      $("#cep").mask("00.000-000")
      $("#nasc").mask("00/00/0000")
      $("#rg").mask("999.999.999-W", {
        translation: {
          'W': {
            pattern: /[X0-9]/
          }
        },
        reverse: true
      })
      var options = {
        translation: {
          'A': {
            pattern: /[A-Z]/
          },
          'a': {
            pattern: /[a-zA-Z]/
          },
          'S': {
            pattern: /[a-zA-Z0-9]/
          },
          'L': {
            pattern: /[a-z]/
          },
        }
      }
      $("#rm").mask("00000")
      $("#codigo").mask("AA.LLL.0000", options)
      $("#telefone").mask("(00) 0000-00009")
      $("#telefone").blur(function(event) {
        if ($(this).val().length == 15) {
          $("#telefone").mask("(00) 00000-0009")
        } else {
          $("#telefone").mask("(00) 0000-00009")
        }
      })

      // M E N S A G E N S - O B R I G A T O R I A S

      $("#formCadastro").validate({
        rules: {
          nome: {
            required: true,
            maxlength: 100,
            minlength: 4,
          },
          sobrenome: {
            required: true,
            maxlength: 100,
            minlength: 3,
          },
          rm: {
            required: true,
          },
          email: {
            required: true,
            email: true,
          },
          /*telefone: {
            required: true,
          },
          cidade: {
            required: true,
          },
          nasc: {
            required: true,
          }*/
          senha: {
            required: true,
          },
          rep_senha: {
            required: true,
          }
        }
      })
    })

    function validar() {

      var senha = formCadastro.senha.value;
      var rep_senha = formCadastro.rep_senha.value;

      if (senha == "" || senha.length <= 5) {
        alert('Preencha o campo senha com mínimo 6 caracteres');
        formCadastro.senha.focus();
        return false;
      }

      if (rep_senha == "" || rep_senha.length <= 5) {
        alert('Preencha o campo confirmar senha com mínimo 6 caracteres');
        formCadastro.rep_senha.focus();
        return false;
      }

      if (senha != rep_senha) {
        alert('Senhas Diferentes');
        formCadastro.rep_senha.focus();
        return false;
      }
    }
  </script>
</body>

</html>