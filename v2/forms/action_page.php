<?php 
	$mensagem = $_POST["fname"];
	if(isset($_POST["lname"])){
		$mensagem .= " " . $_POST["lname"];
	}
	var_dump($_POST);//verificar como a superglobal $_POST é composta
	//header("Location: formulario.php?mensagem=$mensagem"); // redirecionar novamente para ofrmulário, enviando a mensagem.
 ?>