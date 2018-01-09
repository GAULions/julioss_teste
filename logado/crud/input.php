<?php

include '../../conexao/bd.php';

global $conecta;

if ($_POST['acao'] == 'passageiro') {
    $query = 'select * from passageiro';
    $result = mysqli_query($conecta, $query);
    echo '<option value="0">Selecione o Passageiro</option>';
    while ($fetch = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $fetch['id'] . '">' . $fetch['nome'] . '</option>';
    }
} else {
    $query = 'select * from motorista where status = 1';
    $result = mysqli_query($conecta, $query);
    echo '<option value="0">Selecione o Motorista</option>';
    while ($fetch = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $fetch['id'] . '">' . $fetch['nome'] . '</option>';
    }
}

mysqli_close($conecta);
