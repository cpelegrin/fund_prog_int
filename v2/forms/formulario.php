<!DOCTYPE html>
<html>
<head>
	<title>Meu Primeiro Formulário</title>
	<meta charset="utf-8">
	<meta description="Primeiro formulário, aula 6 unidade 4">
</head>
<body>
	<form action="action_page.php" method="post">
		<label for="fname">First name:</label>
		<input type="text" id="fname" name="fname" required><br><br>
		<label for="lname">Last name:</label>
		<input type="text" id="lname" name="lname"><br><br>
		<input type="submit" value="Enviar">
	</form>

	<br><br>

	<?php 
		if(isset($_GET["mensagem"])) { //Se uma mensagem existir, ela é exibida.
			echo "<h3>Olá {$_GET["mensagem"]}</h3>";
		}
	?>

</body>
</html>