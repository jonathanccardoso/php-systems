<!DOCTYPE html>
<html>
<head>
	<title>Enviando Email...</title>
</head>
<body>
	<?php 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

	?>

	<?php 
		$to = "jonathan99moura@hotmail.com";
		$subject = "$subject";
		$message = "<strong>Nome:</strong> $name <br /><br /> 
					<strong>E-mail</strong> $email <br /><br /> 
					<strong>Assunto</strong> $subject <br /><br />
					<strong>Messagem</strong> $message <br /><br />";
		$header = "MIME-Version: 1.0\n";
		$header .= "Content-type: text/html; chartset=iso-8859-1\n";
		$header .= "From: $email\n";
	//send
		mail($to, $subject, $message, $header);
		echo "Mensagem enviada com sucesso.";

	?>
</body>
</html>