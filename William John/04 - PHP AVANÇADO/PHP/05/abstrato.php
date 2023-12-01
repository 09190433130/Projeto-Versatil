<?php
// Uma pessoa
abstract class Pessoa
{
	// Propriedades de identificação da pessoa
	public $nome;
	public $sobrenome;
	
	// Exibe a identificação
	public function exibe_nome () {
		echo $this->nome . ' ' . $this->sobrenome . '<br>';
	}
}

// Classe filha (subclasse) da classe Pessoa
class Mulheres extends Pessoa
{
	// Os métodos já definidos em Pessoa
}
?>
