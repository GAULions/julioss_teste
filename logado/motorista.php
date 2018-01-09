<?php
session_start();
if (!isset($_SESSION['consulta'])) {
    header("Location:../index.php");
}
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Motorista</title>
        <?php include '../header.php'; ?>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="js/nav.js" type="text/javascript"></script>
        <script src="js/logout.js" type="text/javascript"></script>
        <script src="js/motorista.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="nav">

        </div>
        <div class="container">

            <div id="motorista" class="col-sm-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-building fa-fw"></span><span class=""> Motoristas</span>
                        <button class="pull-right btn btn-success btn-xs entrar_chat w3-padding-4" data-toggle="modal" data-target="#cad_mot">
                            <span class="fa fa-plus fa-fw"></span>
                        </button>
                    </div>
                    <div class="panel-body">

                        <div id="table" class="table-responsive">
                        </div>

                    </div>
                </div>                 
            </div>

        </div>
    </body>
    <div id="cad_mot" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <form name="motorista" id="form_cadastrar_motorista" enctype="multipart/form-data">
                    <div class="modal-header">
                        <span>Cadastrar Motorista</span>
                        <span class="close pull-right" data-dismiss="modal" data-target="#cad_mot">×</span>
                    </div>
                    <div class="modal-body container-fluid" style="max-height: 600px;overflow-y: auto;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <input required name="nome_m" type="text" placeholder="Nome do Motorista" class="form-control input-sm"/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <input required id="nasc" name="nasc" type="text" placeholder="Data de Nascimento" class="form-control input-sm"/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <input required id="cpf" name="cpf" type="text" placeholder="CPF" class="form-control input-sm"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-offset-2 col-md-offset-2 col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <input required name="m_carro" type="text" placeholder="Modelo do Carro" class="form-control input-sm"/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <select required id="sexo" name="sexo" class="form-control input-sm">
                                    <option value="0">Selecione seu sexo</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-right ">
                        <div class="btn-group">
                            <button id="canc_btn" data-dismiss="modal" class="btn btn-danger btn-sm" style="cursor: pointer;"><span class="fa fa-times fa-fw"></span></button>
                            <button type="submit" class="pull-right btn btn-success btn-sm"><span class="fa fa-check fa-fw"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</html>