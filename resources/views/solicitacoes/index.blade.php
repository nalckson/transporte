<!DOCTYPE html>
<html>
<head>
	<title>
		
		solicitacoes

	</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
    <input class="btn btn-primary" type="button" value="HOME" onClick="history.go(-1)"> 
		<a class="navbar-brand" href="{{route('logout')}}">SAIR</a>
	</nav>
			<div class="row">
				
				<div class="col-12">
					<center>
	        <div class="container"><br>
	         <h1 class="display-6 font-italic">SOLICITAÇÕES</h1>       
	        </div><br></br>
 					<table>
                    <tr>
                      <td>
                        <center><b><label for="recipient-name" class="col-form-label">Data de Início</label></b></center>
                      </td>
                      <td>
                        <center><b><label for="recipient-name" class="col-form-label">Data de Termino</label></b></center>
                      </td>
                      <td>
                        <center><b><label for="recipient-name" class="col-form-label">Local</label></b></center>
                      </td>
                      <td>
                        <center><b><label for="recipient-name" class="col-form-label">Quantidade de passageiros</label></b></center>
                      </td>
                      <td>
                        <center><b><label for="recipient-name" class="col-form-label">Veículo</label></b></center>
                      </td>
                      <td>
                        <center><b><label for="recipient-name" class="col-form-label">Motorista</label></b></center>
                      </td>
                      <td>
                        <center><b><label for="recipient-name" class="col-form-label">Situação</label></b></center>
                      </td>
                      <td>
                        <center></center>
                      </td>
                    </tr>
	@foreach ($solicitacoes as $not)
                    <tr>
                      <td>
                        {{$not->data_inicio}}
                      </td>
                      <td>
                        {{$not->data_fim}}
                      </td>
                      <td>
                        {{$not->local}} 
                      </td>
                      <td>
                        <center>{{$not->qtdd_passageiros}}</center>
                      </td>
						<td>
                          @foreach ($veiculos as $veic)
                          @if ($veic->id == $not->veiculo)
								{{$veic->modelo}}
                          @endif
                          @endforeach
                      </td>
                      <td>
                        @foreach ($motoristas as $moto)
                          @if ($moto->id == $not->motorista)
								{{$moto->nome}}
                          @endif
                          @endforeach
                      </td>
                      <td>
                         {{$not->situacao}}
                      </td>
                      <td>
                        <center><a  class="btn btn-primary" role="button" href="{{route('solicitacoes.editar', $not->id)}}">Aprovar solicitação</a></center>
                      </td>
                    </tr>


	@endforeach
</table>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>