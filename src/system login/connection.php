<?php 
	//creating conection
	$host = "localhost";
	$user = "root";
	$pass = "";
	$banco = "cadastro";

	$conection = msyql_connect($host, $user, $pass, $banco) or die(mysql_error());
	mysql_select_db($banco) or die(mysql_error());	
?>
