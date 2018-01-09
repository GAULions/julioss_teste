<?php
session_start();
if (!isset($_SESSION['consulta'])) {
    header("Location:../index.php");
}
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Inicio</title>
        <?php include '../header.php'; ?>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
        <script src="js/nav.js" type="text/javascript"></script>
        <script src="js/logout.js" type="text/javascript"></script>
    </head>
    
    <body>
        <div id="nav">
            
        </div>
        <div class="container">

        </div>
    </body>
</html>