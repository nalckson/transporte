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
		<a class="navbar-brand" href="../tecnico/index">HOME</a>
		<a class="navbar-brand" href="{{route('logout')}}">SAIR</a>
	</nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4 font-italic">Tecnico, Bem Vindo!</h1>

          
			  </div>
			</div>
<br><br>

        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
	<br>
	

<div class="card" style="width: 18rem;">
  <div class="card-header">
    <center><b>CADASTRO DE USUÁRIOS</b></center>
  </div>
  <ul class="list-group list-group-flush">
    <center><li class="list-group-item">  <a  class="btn btn-primary" role="button" href="{{route('tecnico.criar')}}"> TÉCNICO </a></li>
    <li class="list-group-item">  <a  class="btn btn-primary" role="button" href="{{route('professor.criar')}}"> PROFESSOR</a></li>
    <li class="list-group-item"> <a  class="btn btn-primary" role="button" href="{{route('motorista.criar')}}">MOTORISTA</a></li></center>
  </ul>
  <div class="card-header">
    
  </div>
</div>

<br><br>
<div class="card" style="width: 18rem;">
  <div class="card-header">
    <center><b>SOLICITAÇÕES</b></center>
  </div>
  <ul class="list-group list-group-flush">
    <center><li class="list-group-item">  <a  class="btn btn-primary" role="button" href="{{route('solicitacoes.criar')}}">NOVA SOLICITAÇÃO</a></li>
   	<li class="list-group-item"> <a  class="btn btn-primary" role="button" href="{{route('solicitacoes.index')}}">SOLICITAÇÕES</a></li></center>
  </ul>
  <div class="card-header">
    
  </div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>