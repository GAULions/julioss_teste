<?php 
session_start();
if (isset($_SESSION['consulta'])) {
    header("Location:logado/index.php");
}
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Login</title>
        <?php include 'header.php'; ?>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="js/login.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">

            <div class="row">
                <h1>Login</h1>
            </div>
            
            <form id="login_">
                
                <div class="row">

                    <div id="" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                        <div class="panel-body">

                            <div class="row">
                                <form action="" method="post" enctype="multipart/form-data" class="form-inline">
                                    <div class="row">

                                        <div class="col-lg-2 col-sm-2 col-xs-12 col-md-2 text-center">
                                            <span class="help-block">Informe seu login:</span>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-12 col-md-4">
                                            <input id="login" type="text" name="login" class="form-control input-sm" placeholder="Digite seu login"/>
                                        </div>

                                        <div class="col-lg-2 col-sm-2 col-xs-12 col-md-2 text-center">
                                            <span class="help-block">Informe sua senha:</span>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xs-12 col-md-4">
                                            <input id="senha" type="password" name="senha" class="form-control input-sm" placeholder="Digite seu password"/>
                                        </div>

                                    </div>           
                                <input hidden="" disabled="disabled" id="id_cadastrado">
                            </div>

                        </div>
                        <div class="">
                            <button type="submit" class="pull-right btn btn-success btn-sm entrar_chat">
                                <span class="fa fa-check fa-fw"></span> Entrar
                            </button>
                        </div>
                    </div>
                </div>
                
            </form>
            
        </div>

    </body>

</html>