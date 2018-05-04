# PHP - Systems

php systems like searching, sending email, login and registration.
test performed at localhost.

## insert and verification of datas ##

```
//msyql
	$sql = mysql_query("INSERT INTO usuario(name, email, password, passwordconfirmation)
		VALUES ('$name', '$email', '$password', '$passwordconfirmation')");
```

## certification of data in bank and in session ##

```
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
```

```
//verification of datas
	$sql = mysql_query("SELECT * FROM usuario where email = '$email' and password ='$password' ") or die(mysql_error());
//query lines
	$row = mysql_num_rows($sql);
	if($row > 0){
		//existence in the bank.
	}
```

```
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
```

## delete session ##

```
<?php 
	session_start();
	session_destroy();
	header("Location: login.php");
?>
```

