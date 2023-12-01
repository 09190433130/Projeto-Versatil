<html>
<body>
	<h2>Cadastro de carro</h2>
	<form method="post">
		<p>Marca:<input type="text" name="marca"/></p>
		<p>Modelo:<input type="text" name="modelo"/></p>
		<p>Motor:<input type="text" name="motor"/></p>
		<p><input type="submit" name="btnCadastro"/>
	</form>
	
	<?php
	
	/*  Aqui, acionamos o arquivo que contém a classe 	*/
	require_once 'carro.php';
	
	/*  verifica se foi clicado no botão para enviar o formulário com os dados */
	if (isset($_POST['btnCadastro'])) {
	
	/* 	aqui estamos criando um objeto, ou seja instanciando a classe carro */
		$carro = new Carro();
				
		$carro->marca=$_POST['marca'];
		$carro->modelo=$_POST['modelo'];
		$carro->motor=$_POST['motor'];
	/* aqui listaremos o que foi capturado pelo POST e gravado nas variaveis da classe Carro */		
		$carro->listaCarro();
	}
		
	?>	
</body>
</html>