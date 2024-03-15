<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comércio Eletrônico</title>

	<link rel="icon" href="{{ asset('favicon.ico') }}">

	<!-- Bootstrap local: -->
	<!-- <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}"> -->
	<!-- jQuery local: pasta public/js/ -->
	<script src="{{asset('js/jquery-3.7.1.js')}}"></script>

    <!-- jQuery remoto-->
	<!-- https://cdnjs.com/libraries/jquery-->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
-->

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
			@foreach($cidades as $cidade)
			<tr>
				<td>{{$cidade->codigo}}</td>
				<td>{{$cidade->nome}}</td>
				<td>{{$cidade->sigla_estado}}</td>
			</tr>
			@endforeach
		</table>

		<!-- Rodape de acesso as paginas-->
		<div class="row">
            <div class="col-sm-12 text-center">
				<nav><?php echo $cidades->render(); ?></nav>
			</div>
		</div>

		
	<!-- Esse trecho deve aparecer antes do </body> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
</body>

</html>