<?php 
	include "connection.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Resultados na pesquisa.</title>
</head>
<body>

<?php 
	$buscar = $_POST['seach'];
	$sql = "SELECT * FROM usuariostb WHERE nome LIKE '%".$buscar."%'";

	$row = mysql_num_rows($sql);
	if($row > 0){
		while ($row > 0) {
			while ($linha = mysql_fetch_array($sql)) {
				$nome = $linha['nome'];
				$sobrenome = $linha['sobrenome'];
				$idade = $linha['idade'];
				$descricao = $linha['descricao'];

				echo "<strong>Nome: </strong>".@$nome;
				echo "<br /><br />";
				echo "<strong>Sobrenome: </strong>".@$sobrenome;
				echo "<br /><br />";
				echo "<strong>Idade: </strong>".@$idade;
				echo "<br /><br />";
				echo "<strong>Descrição: </strong>".@$descricao;
			}
		}
	}
	else{
		echo "Nenhum usuário encontrado!!!";
	}

?>

</body>
</html>