<!DOCTYPE html>
<html>
<head>
	<title>Envio de E-mail</title>
</head>
<body>
	<form name="contactform" method="post" action="sendEmail.php">
		Name: <input type="text" name="name" /> <br/> <br/>
		E-mail: <input type="email" name="email" /> <br/> <br/>	
		Subject: <input type="text" name="subject" /> <br/> <br/>
		Message: <input type="text" name="message" /> <br/> <br/>

		<input type="submit" name="Send E-mail">
	</form>
</body>
</html>