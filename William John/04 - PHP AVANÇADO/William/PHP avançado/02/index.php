<html>
<body>
<h2>Cadastro de carro</h2>
<form method="post">
<p>Marca:<input type="text" name="marca"/></p><br>
<p>Modelo:<input type="text" name="modelo"/></p><br>
<p>Motor:<input type="text" name="motor"/></p><br>
<p><input type="submit" name="btnCadastro"/>
</form>

<?php


require_once 'carro.php';


if (isset($_POST['btnCadastro'])) {


$carro = new Carro();

$carro->marca=$_POST['marca'];
$carro->modelo=$_POST['modelo'];
$carro->motor=$_POST['motor'];

$carro->listaCarro();
}

?>
</body>
</html>