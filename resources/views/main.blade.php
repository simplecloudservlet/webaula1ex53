<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<script src="js/jquery-3.7.1.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"/> -->
	<!-- Folha de estilos do Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

	<div class="container" >
		<!-- Menu no topo da pagina -->
		<div class="nav navbar navbar-inverse">
			<div class="navbar-inner">
				<!-- opcao principal -->
				<div class="navbar-header">
					<a class="navbar-brand" href="{{URL::to('cidades') }}">Cidades</a>
				</div>

				<!-- Link para a janela modal de pesquisa-->
				<ul class="nav navbar-nav">
					<li>
						<a data-toggle="modal" data-target="#modal-search">Pesquisar</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- Conteudo principal da pagina-->
		<table class="table">
			<tr>
				<th>Código</th>
				<th>Cidade</th>
				<th>Estado</th>
			</tr>
            <!-- Linhas da tabela-->
			<!--
				
		-->
		</table>

		<!-- Rodape de acesso as paginas-->
		<div class="row">

		</div>

		<!-- Janela modal com as opcoes de pesquisa-->
		<div id="modal-search" class="modal">
			
		</div>

		<!-- JavaScript para converter a opcao de pesquisa em um link -->
		<script>

		</script>

		<!-- Biblioteca para acessar o Google Maps-->
		<script src="https://maps.googleapis.com/maps/api/js">
		</script>

		<!-- Script para renderizar o maps-->
		<script>

		</script>	

		<!-- Formatacao CSS para o canvas onde se encontra o maps-->
		<style>

		</style>	

	</div>

	<!-- Esse trecho deve aparecer antes do </body> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
</body>

</html>