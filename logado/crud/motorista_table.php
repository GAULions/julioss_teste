<?php

include '../../conexao/bd.php';

global $conecta;


$select = 'select * from motorista';

$result = mysqli_query($conecta, $select);
echo '<table class = "table table-bordered">';
echo '<tr>';
echo '<th>Nome</th>';
echo '<th>Nascimento</th>';
echo '<th>CPF</th>';
echo '<th>Carro</th>';
echo '<th>Sexo</th>';
echo '<th>Status</th>';
echo '</tr>';

while ($fetch = mysqli_fetch_assoc($result)) {
    $data = explode("-", $fetch['dt_nasc']);
    $dtnasc = $data[2] . '/' . $data[1] . '/' . $data[0];
    echo '<tr>';
    echo '<td>' . $fetch['nome'] . '</td>';
    echo '<td>' . $dtnasc . '</td>';
    echo '<td>' . $fetch['cpf'] . '</td>';
    echo '<td>' . $fetch['mod_carro'] . '</td>';
    echo '<td>' . $fetch['sexo'] . '</td>';
    if ($fetch['status'] == 1) {
        echo '<td><button value="' . $fetch['id'] . '" type = "submit" class = "btn btn-danger btn-xs desativar"><span class = "fa fa-ban fa-fw"></span></button></td>';
    } else {
        echo '<td><button value="' . $fetch['id'] . '" type = "submit" class = "btn btn-success btn-xs ativar"><span class = "fa fa-check fa-fw"></span></button></td>';
    }
    echo '</tr>';
}

echo '</table>';

mysqli_close($conecta);
