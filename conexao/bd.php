<?php

header('Content-Type: text/html; charset=utf-8');
$host = 'localhost';
$login = 'root';
$senha = '';
$db = 'teste';
$conecta = mysqli_connect($host, $login, $senha) or print (mysqli_error());
mysqli_select_db($conecta, $db);
mysqli_query($conecta, 'SET character_set_connection=utf8');
mysqli_query($conecta, 'SET character_set_client=utf8');
mysqli_query($conecta, 'SET character_set_results=utf8');

