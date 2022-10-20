<?php

session_start();
//include('../controller/verifica_login.php');
if (!$_SESSION['usuario']) {
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/Style.css">
    <link rel="shortcut icon" href="img/Logo site preto.png">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <style>
        .foto_perfil {
            border-radius: 100%;
        }
    </style>
</head>

<body style="background-color: #e6e6e6">

    <div class="container">
        <div class="mail-box">
            <aside class="sm-side">
                <div class="user-head">
                    <a class="inbox-avatar">
                        <img width="64" hieght="60" src="https://scontent.fpoo5-1.fna.fbcdn.net/v/t39.30808-1/309903872_5434373663282886_179448773102220686_n.jpg?stp=dst-jpg_p200x200&_nc_cat=104&ccb=1-7&_nc_sid=7206a8&_nc_ohc=uGCOCZoS19MAX_o_HvC&_nc_ht=scontent.fpoo5-1.fna&oh=00_AT8ywYX4zie1NbVEFPpZX02yvMLLXrYqj_slrI8qLhJuwA&oe=6355B579">
                    </a>
                    <div class="user-name">
                        <h5><a href="#">Juan Archangelo</a></h5>
                        <span><a href="#"><?= $_SESSION['usuario']; ?></a></span>
                    </div>
                </div>
                <ul class="inbox-nav inbox-divider">
                    <li class="active">
                        <a href="painel.php">painel </a>
                    </li>
                    <li>
                        <a href="cadastroinfo.php"> Cadastro</a>
                    </li>
                    <li>
                        <a href="cadastroinfo.php"> Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-danger text-light" href="../controller/logout.php">Logout</a>
                    </li>
                </ul>
                <div class="inbox-body text-center">
                    <div class="btn-group">
                        <a class="btn mini btn-primary" href="novo_user.php">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div class="btn-group">
                        <a class="btn mini btn-success" href="https://api.whatsapp.com/send?phone=5519987720695&text=Ol%C3%A1%2C%20gostaria%20de%20falar%20sobre%20seus%20servi%C3%A7os!" target="blanck">
                            <i class="fa fa-phone"></i>
                        </a>
                    </div>
                    <!-- <div class="btn-group">
                        <a class="btn mini btn-info" href="javascript:;">
                            <i class="fa fa-cog"></i>
                        </a>
                    </div> -->
                </div>
            </aside>
            <aside class="lg-side">
                <div class="inbox-head">
                    <h3>Painel de Controle</h3>
                    <form action="#" class="pull-right position">
                        <div class="input-append">
                            <input type="text" class="sr-input" placeholder="Procurar...">
                            <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="inbox-body">
                    <table class="table table-inbox table-hover">
                        <thead>
                            <tr>
                                <td class="view-message">Nome</td>
                                <td class="view-message">Domínio</td>
                                <td class="view-message">Ação</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("../controller/controllerinfo.php");
                            $objControllerFunc = new controllerInfo();
                            $objControllerFunc->getTodosFunc();
                            ?>
                        </tbody>
                    </table>
                </div>
            </aside>
        </div>
    </div>

    <!-- Footer-->

    <footer class="row bg-light">
        <div class="col-md-12 text-center">
            <p class="mb-2">Juan archangelo © 2022 - Todos os direitos reservados</p>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>

</body>

</html>