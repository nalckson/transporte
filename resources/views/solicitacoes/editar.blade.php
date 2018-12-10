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
           <h1 class="display-6 font-italic">APROVAR SOLICITAÇÃO</h1>       
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
    <form action="{{route('solicitacoes.atualizar', $not->id)}}" method="post">
                  @csrf
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
                          <select name="veiculo" required>
                            <option value="" selected disabled hidden>Escolha o veículo</option>
                          @foreach ($veiculos as $key)
                              <option value="{{ $key->id }}">{{ $key->modelo}}</option>
                          @endforeach
                          </select>
                      </td>
                      <td>
                          <select name="motorista" required>
                            <option value="" selected disabled hidden>Escolha o motorista</option>
                          @foreach ($motoristas as $key)
                              <option value="{{ $key->id }}">{{ $key->nome }}</option>
                          @endforeach
                          </select>
                      </td>
                      <td>
                        <select name="situacao" required>
                                <option value="Em andamento" selected="selected">Em andamento</option>
                              <option value="Aprovada">Aprovada</option>
                              <option value="Negada">Negada</option>
                          </select>
                      </td>
                      <td>
                        <center><input class="btn btn-primary" type="submit" value="Salvar alterações"></input></center>
                      </td>
                    </tr>
</form>

  @endforeach
</table>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>