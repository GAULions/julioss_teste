<?php

include '../conexao/bd.php';
global $conecta;
$r['consulta'] = false;
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$logar = 'select * from login where login="' . $login . '" && senha ="' . $senha . '"';


if ($select = mysqli_query($conecta, $logar)) {
    if ($result = mysqli_fetch_assoc($select)) {
        $r['consulta'] = true;
        session_start();
        session_destroy();
        session_start();
        $_SESSION['consulta'] = true;
        $_SESSION['login'] = $login;
        mysqli_close($conecta);
        die(json_encode($r));
    } else {
        mysqli_close($conecta);
        die(json_encode($r));
    }
} else {
    mysqli_close($conecta);
    die(json_encode($r));
}

