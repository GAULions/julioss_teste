<?php

include '../../conexao/bd.php';

global $conecta;


$select = 'SELECT
	c.id,
	m.nome AS "motorista",
	p.nome AS "passageiro",
	c.valor
FROM
	corrida c
INNER JOIN motorista m ON c.id_motorista = m.id
INNER JOIN passageiro p ON c.id_passageiro = p.id';

$result = mysqli_query($conecta, $select);
echo '<table class = "table table-bordered">';
echo '<tr>';
echo '<th>Motorista</th>';
echo '<th>Passageiro</th>';
echo '<th>Valor</th>';
echo '</tr>';

while ($fetch = mysqli_fetch_assoc($result)) {
    $valor = str_replace(".", ",", $fetch['valor']);
    echo '<tr>';
    echo '<td>' . $fetch['motorista'] . '</td>';
    echo '<td>' . $fetch['passageiro'] . '</td>';
    echo '<td>' . $valor . '</td>';
    echo '</tr>';
}

echo '</table>';

mysqli_close($conecta);
