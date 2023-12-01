<?php

class Empregado {

public $nome;
public $sobrenome;
public $salario_mensal;

public function cadastro($n, $sn, $sm) {

$this->nome = $n;
$this->sobrenome = $sn;

if ($sm < 0)
$this->salario_mensal = 0;
else
$this->salario_mensal = $sm;

}

public function listaEmpregado() {

echo "
<p>Nome: {$this->nome}</p>
<p>Sobrenome: {$this->sobrenome}</p>
<p>Salario: {$this->salario_mensal}</p>";
}
}
?>