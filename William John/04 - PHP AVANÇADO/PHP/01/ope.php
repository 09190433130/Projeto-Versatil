<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
 // session_start inicia a sessão
 session_start();
 // as variáveis login e senha recebem os dados digitados na página anterior
 $login = $_POST['login'];
 $senha = $_POST['senha'];
 // Verifica se o login e a senha digitados batem com os valores fornecidos
 if($login == "admin" && $senha == "123" )
 {
 // coloca na sessão o login e a senha caso tenha sido os corretos e redireciona
//para a url site.php
 $_SESSION['login'] = $login;
 $_SESSION['senha'] = $senha;
 header('location:site.php');
 }
 else{
 //caso login ou senha estejam incorretos são destruidas na memorias as variaveis
//e redirecionado para a pagina index.php
 unset ($_SESSION['login']);
 unset ($_SESSION['senha']);
 header('location:erro.php');
 }
?>
</body>
</html>