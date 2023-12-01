<?php

/*
 * para declarar uma classe deve utilizar a palavra reservada class e logo depois o nome da classe, veja que no nome da classe
 * a primeira letra está em maiusculo para justamente diferencia-la
 */
class Empregado {

    // Aqui cria-se os atributos, ou seja as variaveis que irão armazenar os dados pertinentes a representar a classe
    public $nome;
    public $sobrenome;
    public $salario_mensal;

    /*
     * Esse método será utilizado para cadastrar um empregado, veja que está sendo passado três parametros para o método
     * irão representar os atributos respectivamente: nome, sobrenome, salario minimo
     *
     * Os métodos representam as ações que uma classe pode executar
     * */
    public function cadastro($n, $sn, $sm) {

        /*
         * Para poder utilizar atributos e métodos da propria classe utiliza-se a palavra reservada $this seguido do sinal -> e o nome do atributo, ela é uma instancia da
         * classe dentro dela mesmo
         */

        $this->nome = $n;
        $this->sobrenome = $sn;

        /*
         * aqui se faz uma validação do valor do salario minimo antes de passar para o atributo, verifica-se se o salario minimo é menor do que zero
         * sendo um valor negativo atribui-se 0.0 ao atributo caso contrario atribui-se o valor do salario minimo digitado
         */
        if ($sm < 0)
            $this->salario_mensal = 0;
        else
            $this->salario_mensal = $sm;

    }

    /*
     * Este método irá escrever o cadastro do Empregado, nome, sobrenome e salario mensal
     */
    public function listaEmpregado() {

        /*
         * Veja que para escrever os atributos com o echo precisamos colocar entre chaves
         */
        echo "
            <p>Nome: {$this->nome}</p>
            <p>Sobrenome: {$this->sobrenome}</p>
            <p>Salario: {$this->salario_mensal}</p>";
    }
}
?>