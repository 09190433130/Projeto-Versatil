<html>
<body>

<h1>Cadastro de pessoa</h2>

<form method="post">

<p>Nome: <input type="text" name="nome"/></p><br>
<p>Parte do corpo: <input type="text" name="parte"/></p><br>
<p><input type="submit" name="brnCadastro"/>
</form>

<?php


include ("pessoa.php");


if (isset($_POST{'brnCadastro'})) {

$pessoa = new Pessoa($_POST['nome']);

$pessoa->criar_corpo($_POST['parte']);

$pessoa->mostra_corpo();

unset($pessoa);
}
?>
</body>
</html>