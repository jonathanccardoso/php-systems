<?php 
	//certification of data
	//creating conection
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";

	$conexao = msyql_connect($host, $user, $pass, $banco) or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());	
?>

<?php 
	//verification of session
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["password"])){
		header("Location: login.php");	
		exit;
	}  
	else{
		echo "Você esta logado :D)";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle</title>
</head>
<body>
	<a href="logout.php">Sair</a>
</body>
</html>