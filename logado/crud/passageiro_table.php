<?php

include '../../conexao/bd.php';

global $conecta;


$select = 'select * from passageiro';

$result = mysqli_query($conecta, $select);
echo '<table class = "table table-bordered">';
echo '<tr>';
echo '<th>Nome</th>';
echo '<th>Nascimento</th>';
echo '<th>CPF</th>';
echo '<th>Sexo</th>';
echo '</tr>';

while ($fetch = mysqli_fetch_assoc($result)) {
    $data = explode("-", $fetch['dt_nasc']);
    $dtnasc = $data[2] . '/' . $data[1] . '/' . $data[0];
    echo '<tr>';
    echo '<td>' . $fetch['nome'] . '</td>';
    echo '<td>' . $dtnasc . '</td>';
    echo '<td>' . $fetch['cpf'] . '</td>';
    echo '<td>' . $fetch['sexo'] . '</td>';
    echo '</tr>';
}

echo '</table>';

mysqli_close($conecta);
