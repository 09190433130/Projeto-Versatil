<html>
<body>

<h2>Cadastro de emprego</h2>
<form method="post">
<p>Nome: <input type="text" name="nome"/></p>
<p>Sobrenome: <input type="text" name="sobrenome"/></p>
<p>Salario: <input type="text" name="salario"/></p>
<p><input type="submit" name="btnCadastro"/>
</fomr>

<?php

include ("empregado.php")


if (isset($_POST['btnCadastro'])) {


$fulano = new Empregado();


$fulano->cadastro($_POST['nome'], $_POST['sobrenome'], $_POST['salario']);


$fulano->listaEmprego();
}
?>

</body>
</html>