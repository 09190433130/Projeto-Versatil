<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem titulo</title>
</head>

<body>
<?php

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

if($login == "admin" &&senha == "123" )
{


$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{


unset ($_SESSION['login']);
unset ($_SESSION['senha']);
header('location:erro.php');
}
?>
</body>
</html>