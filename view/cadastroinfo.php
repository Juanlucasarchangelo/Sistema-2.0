<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Cadastro de Produtos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="estilo/estilo.css">
  <link rel="shortcut icon" href="img/Logo site preto.png">
</head>

<body class="bg-dark">

  <!-- I m a g e m - e - F o r m u l á r i o -->

  <div class="text-center text-white py-5 my-5">

    <!-- Á r e a - d o - F o r m u l á r i o -->

    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-10 p-4">
          <h1 class="text-light">Cadastro de Produtos</h1>
          <br>
          <!-- F o r m u l a r i o -->

          <form id="formCadastro" name="formCadastro" action="../controller/controllerInfo.php" method="POST">

            <!-- Nome do Produto-->

            <div class="form-row">
              <div class="form-group col-md-4">
                <input required type="text" class="form-control" id="nome_prod" name="nome_prod" placeholder="Nome do produto">
              </div>

              <!-- Quantidade -->

              <div class="form-group col-md-4">
                <input required type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade em estoque">
              </div>

              <!-- Valo Unitário -->

              <div class="fo rm-group col-md-4"> <input required type="text" class="form-control" id="valor_unitario" name="valor_unitario" placeholder="Valor unitário"> </div>
            </div>

            <!-- E n v i a r - e - L i m p a r -->

            <button type="reset" class="btn btn-danger mx-3">Limpar</button>
            <button type="submit" class="btn btn-primary mx-3">Cadastrar</button>

            <input type="hidden" id="_incluir" name="_incluir" value="_incluir">

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- M A S C A R A - D O - T E L E F O N E -->

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/localization/messages_pt_BR.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $("#cel").mask("(00) 0000-00009")

      $("#cel").blur(function(event) {
          if ($(this).val().length == 15) {
            $("#cel").mask("(00) 00000-0009")
          } else {
            $("#cel").mask("(00) 0000-00009")
          }
        })

        /*$("#formCadastro").validate({
          rules: {
            nome: {
              required: true
            },
            email: {
              email: true,
              required: true
            },
            cel: {
              required: true
            },
            objetivo: {
              required: true
            },
            obs: {
              required: true
            }
          }
        })*/
    })
  </script>

</body>

</html>