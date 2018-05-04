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

<!DOCTYPE html>
<html>
<head>
	<title>Autenticação do Usuário</title>
	<script type="text/javascript">
		function LoginSucess(){
			setTimeOut("windows.location='painel.php' ", 5000);
		}
		function Loginfailed(){
			setTimeOut("windows.location='login.php' ", 5000);
		}
	</script>
</head>
<body>

<?php 
	$email = $_POST["email"];
	$password = $_POST["password"];

	//verification of datas
	$sql = mysql_query("SELECT * FROM usuario where email = '$email' and password ='$password' ") or die(mysql_error());
	
	//query lines
	$row = mysql_num_rows($sql);
	if($row > 0){
	//existence in the bank.
		session_start();
		$_SESSION['email']  = $_POST['email'];
		$_SESSION['password']  = $_POST['password'];
		echo "Você foi logado com sucesso.";
		echo "<script>LoginSucess()</script>";
	}
	else{
		echo "Email ou senha inválido!!!";
		echo "<script>Loginfailed()</script>";	
	}
?>

</body>
</html>
