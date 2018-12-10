@extends('layouts.rodape')
<!DOCTYPE html>
<html>
<head>
	<title>
	Transportech
	</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-dark bg-primary">

		<a class="navbar-brand" href="../motorista/index">HOME</a>
		<div align="rigth">
			<a class="navbar-brand" role="button" href="{{route('solicitacoes.visualizar')}}">VIAGENS</a>
			<a class="navbar-brand" href="{{route('logout')}}">SAIR</a>
		</div>
	  </div>
	</nav>

	<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
    	<div class="jumbotron">
	        <div class="container">
	          <center><h1 class="display-4">Bem vindo, motorista!</h1></center>	         
	        </div>
	    </div>
</main>
				<br>
                <div align="center">
                	<div class="container">
	                    <h4 class="display-4">
	                        "A verdadeira motivação vem de realização, desenvolvimento pessoal, satisfação no <b>trabalho</b> e reconhecimento."
	                    </h4>
                	</div>
                </div>
                <br><br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@section('footer')
@endsection
</body>
</html>