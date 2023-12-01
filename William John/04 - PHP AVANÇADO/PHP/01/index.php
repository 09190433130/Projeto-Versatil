<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
 <form method="post" action="ope.php" id="formlogin" name="formlogin" >
 <fieldset id="file">
 <legend>LOGIN</legend><br />
 <label>NOME : </label>
 <!-- o campo “name” dentro do input e importante, pois será ele que
armazenará os dados digitados . -->
 <input type="text" name="login" id="login" /><br /><br>
 <label>SENHA :</label>
 <input type="password" name="senha" id="senha" /><br /><br>
 <input type="submit" value="LOGAR " />
 </fieldset>
 </form>
 </body>
</html>