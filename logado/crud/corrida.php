<?php

include '../../conexao/bd.php';

global $conecta;
mysqli_autocommit($conecta, false);
$r['erro'] = 0;
$r['msg'] = '';
$r['switch'] = false;
$motorista = $_POST['motorista'];
$passageiro = $_POST['passageiro'];

$valor = str_replace(".", "", $_POST['valor']);
$valor = str_replace(",", ".", $valor);



$insert = 'insert into corrida(id_motorista, id_passageiro, valor) values("' . $motorista . '", "' . $passageiro . '", "' . $valor . '");';
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