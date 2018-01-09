<?php

include '../../conexao/bd.php';

global $conecta;



$consulta = 'select * from menu';

$query = mysqli_query($conecta, $consulta);
echo '<nav class="navbar navbar-default">';
echo '<div class="container-fluid">';
echo '<div class="navbar-header">';
echo '<a class="navbar-brand" href="index.php">Corridas2k18</a>';
echo '</div>';
echo '<ul class = "nav navbar-nav">';
echo '<li class = "active"><a href = "#">Inicio</a></li>';
while ($fetch = mysqli_fetch_assoc($query)) {
    echo '<li><a href = "' . $fetch['href'] . '">' . $fetch['nome'] . '</a></li>';
}
echo '<li><a class="log" href = "#">Logout</a></li>';
echo '</ul>';
echo '</div>';
echo '</nav>';
mysqli_close($conecta);
