<?php

include '../../conexao/bd.php';

global $conecta;
mysqli_autocommit($conecta, false);
$r['erro'] = 0;
$r['msg'] = '';
$r['switch'] = false;
$data = explode("/", $_POST['nasc']);
$dtnasc = $data[2] . '-' . $data[1] . '-' . $data[0];
$nome = $_POST['nome_m'];
$cpf = $_POST['cpf'];
$carro = $_POST['m_carro'];
if ($_POST['sexo'] == "1") {
    $sexo = 'M';
} else {
    $sexo = 'F';
}

$insert = 'insert into motorista(nome, dt_nasc, cpf, mod_carro, sexo) values("' . $nome . '", "' . $dtnasc . '", "' . $cpf . '", "' . $carro . '", "' . $sexo . '");';
if (!$query = mysqli_query($conecta, $insert)) {
    $r['erro'] ++;
}

if ($r['erro'] > 0) {
    mysqli_rollback($conecta);
    mysqli_close($conecta);
    $r['msg'] = "erro no insert";
    $r['q'] = $insert;
    die(json_encode($r));
} else {
    mysqli_commit($conecta);
    mysqli_close($conecta);
    $r['msg'] = "success";
    $r['switch'] = true;
    die(json_encode($r));
}