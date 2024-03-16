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

<!-- -->

<!-- -->

	<div class="container" >
		<!-- Menu no topo da pagina -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{URL::to('/') }}">Cidades</a>
	<!-- Para o menu responsivo quando alterar as dimensoes -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-search" href="#">Pesquisar Modal</a>
        </li>
      </ul>
      
        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal-search" >Search</button>
      
    </div>
  </div>
</nav>

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

		<!-- Janela modal com as opcoes de pesquisa-->
		<div id="modal-search" class="modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<input id="search-val" type="input" class="form-control" placeholder="Nome da cidade...">
					
						<!-- Botoes de radio para tipo de pesquisa-->
						<div class="radio">
                           	<label>
							<input id="opt0" type="radio" name="search-type" value="0" checked>Exatamente</label>
						</div>
						<div class="radio">
                           	<label>
							<input id="opt1" type="radio" name="search-type" value="1" checked>Inicia com</label>
						</div>
						<div class="radio">
                           	<label>
							<input id="opt2" type="radio" name="search-type" value="2" checked>Contém</label>
						</div>
					</div>
					<div class="modal-footer">
							<button id="btn-search" class="btn btn-primary" data-dismiss="modal">Pesquisar</button>
					</div>
				</div>
			</div>
		</div>

		<!-- JavaScript para converter a opcao de pesquisa em um link -->
		<script>
			$(function(){
				$("#btn-search").click(function(){
					var val = $("#search-val").val();
					if(val.length==0)
						val = "*";

						//Chamar metodo do controller
						window.location.assign("http://localhost/webaula1ex53/public/index.php/cidades/" +
							$("input[name=search-type]:checked").val()+
							"/" + val + "/search"
						
						);
				});
			});
		</script>
		
	</div>
	<!-- Esse trecho deve aparecer antes do </body> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
</body>

</html>