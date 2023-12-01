<?php

echo "eu existo";

class MySQLDatabase
{
    private $conexao;
    private $Username = "root";
    private $Host = "localhost";
    private $Password = "";
    private $BancoDeDados = "versati1_projeto";

    public function __construct()
    {
        try {
            $this->conexao = new PDO("mysql:host={$this->Host};dbname={$this->BancoDeDados}", $this->Username, $this->Password);    
            echo "Banco conectado com sucesso!";

        } catch (PDOException $e) {
            die("ERRO: ". $e->getMessage());
        }

    }

    public function getConexao()
    {
        return $this->conexao;
       
    }

    public static function getInstance()
    {
        $mysqlConnect = new MySQLDatabase;
        return $mysqlConnect->getConexao();
        
    }

  

    
}
