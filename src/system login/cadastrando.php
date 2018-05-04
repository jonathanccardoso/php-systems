<!DOCTYPE html>
<html>
<head>
	<title>Cadstrando...</title>
</head>
<body>

<?php 
	//creating conection
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";

	$conexao = msyql_connect($host, $user, $pass, $banco) or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());	
?>

<?php 
	// capturing the data passed on and playing in the database.
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$password = $_POST['password'];
	$passwordconfirmation = $_POST['passwordConfirmation'];
	
	//msyql
	$sql = mysql_query("INSERT INTO usuario(name, email, password, passwordconfirmation)
		VALUES ('$name', '$email', '$password', '$passwordconfirmation')");

	echo("<h1>Cadastro efetuado com sucesso!!!</h1>");
?>

</body>
</html>
