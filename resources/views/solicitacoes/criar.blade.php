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
		<input class="btn btn-primary" type="button" value="HOME" onClick="history.go(-1)">
		<a class="navbar-brand" href="{{route('logout')}}">SAIR</a>
	</nav>
<br>
 

	        <div class="row">
				<div class="col-3"></div>
				<div class="col-5">
					<center>
	        <div class="container">
	         <h1 class="display-6 font-italic">Submeter Solicitação</h1>       
	        </div><br>
	        <label><b>Abaixo coloque a data de Início e Término da viagem, local e quantidade de passageiros, respectivamente.</b></label>
						<form method="POST" action="{{route('solicitacoes.salvar')}}">
						{{ csrf_field() }}
						<div class="form-group">
						<input class="form-control" type="date" name="data_inicio">
						<br>
						<div class="form-group">
						<input class="form-control" type="date" name="data_fim">
						<br>
						<div class="form-group">
						<input class="form-control" type="text" name="local" placeholder="Local">
						<br>
						<input type="number" name="qtdd_passageiros" class="form-control" placeholder="Capacidade">
						<br>
					
					
						</select>
						</div>
						<button class="btn btn-primary" type="submit">ENVIAR</button>
					</form>
					</center>
				</div>
				<div class="col-3"></div>
			</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>