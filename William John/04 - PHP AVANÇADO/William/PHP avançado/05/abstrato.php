<?php


abstract class Pessoa
{

public $nome;
public $sobrenome;


public function exibe_nome () {
echo $this->nome . ' ' . $this->sobrenome . '<br>';
}
}


class Mulheres extends Pessoa
{

}
?>