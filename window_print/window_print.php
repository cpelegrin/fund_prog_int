<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Imprimindo uma Página</title>
	<style type="text/css">
		.cor-vermelha{
			color: red;
		}
	</style>
	<!-- <script type="text/javascript">
		function imprimir(){
			window.print();
		}
	</script> -->
</head>
<body>
	<h1>Texto em Destaque - Nome</h1>
	<p>Descrição qualquer...</p>
	<h2>Novo destaque</h2>
	<p class="cor-vermelha">Descrição vinda da formulário: 
		<?php 
			if(isset($_POST['enviado'])){
				echo $_POST['enviado'];
			}
		?>
	</p>
	<input type="button" value="Imprimir" onclick="imprimir()">
</body>
</html>