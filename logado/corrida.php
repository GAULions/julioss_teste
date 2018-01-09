<?php
session_start();
if (!isset($_SESSION['consulta'])) {
    header("Location:../index.php");
}
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Corrida</title>
        <?php include '../header.php'; ?>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="js/nav.js" type="text/javascript"></script>
        <script src="js/logout.js" type="text/javascript"></script>
        <script src="js/corrida.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="nav">

        </div>
        <div class="container">

            <div id="corridas" class="col-sm-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="fa fa-building fa-fw"></span><span class=""> Corridas</span>
                        <button class="pull-right btn btn-success btn-xs entrar_chat w3-padding-4" data-toggle="modal" data-target="#cad_corr">
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
    <div id="cad_corr" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form name="corrida" id="form_cadastrar_corrida" enctype="multipart/form-data">
                    <div class="modal-header">
                        <span>Cadastrar corrida</span>
                        <span class="close pull-right" data-dismiss="modal" data-target="#cad_corr">×</span>
                    </div>
                    <div class="modal-body container-fluid" style="max-height: 600px;overflow-y: auto;">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <select required id="motorista" name="motorista" class="form-control input-sm"></select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <select required id="passageiro" name="passageiro" class="form-control input-sm"></select>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 w3-padding">
                                <input required name="valor" id="valor" type="text" placeholder="Valor da Corrida" class="form-control input-sm"/>
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
    </div>
</html>

