<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Imprimindo uma Página</title>
	<style type="text/css">
		.cor-vermelha{
			color: red;
		}
	</style>
	<script type="text/javascript">
		function imprimir(){
			window.print();
		}
	</script>
</head>
<body>
	<h1>Título da Página</h1>
	<p>Descrição longa em campo paragráfo.</p>
	<h2>Novo destaque</h2>
	<p class="cor-vermelha">
		Descrição vinda do formulário: 
		<?php 
			if(isset($_POST['enviado'])){
				foreach($_POST['enviado'] as $env){
					echo "$env<br>";
				}
			}
		?>
	</p>
	<button onclick="imprimir()">Imprimir</button>
</body>
</html>

