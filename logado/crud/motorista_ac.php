<?php

include '../../conexao/bd.php';

global $conecta;

mysqli_autocommit($conecta, false);

$r['erro'] = 0;

if ($_POST['acao'] == 'ativar') {
    $update = "update motorista set status = 1 where id = " . $_POST['id'] . "";
} else {
    $update = "update motorista set status = 0 where id = " . $_POST['id'] . "";
}

if (!$query = mysqli_query($conecta, $update)) {
    $r['erro'] ++;
}

if ($r['erro'] > 0) {
    mysqli_rollback($conecta);
    $r['switch'] = false;
    mysqli_close($conecta);
    die(json_encode($r));
} else {
    mysqli_commit($conecta);
    $r['switch'] = true;
    mysqli_close($conecta);
    die(json_encode($r));
}
