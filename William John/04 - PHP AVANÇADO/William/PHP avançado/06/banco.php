<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco_dados = "clientes";


$conn = new mysqli($servidor, $usuario, $senha, $banco_dados);


if ($conn->connect_error) {
die("Falha na conexão: " . $conn->connect_error);
}

$consulta = "SELECT id, nome, telefone, email FROM clientes";
$resultado = $conn->query($consulta);

if ($resultado->num_rows > 0) {


while($linha = $resultado->fetch_assoc()) {
    echo "ID: " . $linha["id"]. " / CLIENTE: " . $linha["nome"]. " /
  TELEFONE: "
  . $linha["telefone"]. " / E-MAIL: " . $linha["email"]. "<br>";
    }
} else {
echo "0 results";
}
$conn->close();
?>