<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Cadastro</title>
</head>
<body>
	<form name="signup" method="post" action="cadastrando.php">
		name: <input type="text" name="name" /> <br/> <br/>
		email: <input type="email" name="email" /> <br/> <br/>	
		password: <input type="password" name="password" /> <br/> <br/>
		password confirmation <input type="password" name="passwordConfirmation" /> <br/> <br/>

		<input type="submit" name="Cadastrar">
	</form>
	<?php
		/*no mysql
			criar o banco de dados e uma tabela com 
				nomes das variavéis que iram ser adicionadas com o seu tipo vachar com tamanho 250 e somente no id colocas-se int e auto-incremento (A.I);
			e no storage engine coloca-se mysql -> MyISAM 
		*/
	?>
</body>
</html>