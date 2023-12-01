<?php
// Inclui a classe
Include ('abstrato.php');

// Cria o objeto
$mulheres = new Mulheres;

// Configura as propriedades
$mulheres->nome  = 'Rose ';
$mulheres->sobrenome = 'Miranda ';

$mulheres->exibe_nome(); // Rose Miranda
?>
