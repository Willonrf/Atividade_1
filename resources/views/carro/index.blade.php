<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="../../css/app.css">
        <style>
            table {
            border-collapse: collapse;
            width: 100%;
        }
  
        th, td {
            text-align: left;
            padding: 8px;
        }
  
        tr:nth-child(even) {background-color: #f2f2f2;}
</style>
        <title>Atividade</title>
    </head>
    <body>
        <div class="mb-3">
            <form method="POST" action="/carro">
                @csrf
                <div>
                    
                    <label for="marca" class="form-label">Marca: </label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{$carro->marca}}"/>
                </div>
                <div>
                    <label for="modelo_do_veiculo" class="form-label">Modelo do veiculo: </label>
                    <input type="text" class="form-control" id="modelo_do_veiculo" name="modelo_do_veiculo"  value="{{$carro->modelo_do_veiculo}}"/>
                </div>
                <div>
                    <label for="placa_carro" class="form-label">Placa do carro: </label>
                    <input type="text" class="form-control" id="placa_carro" name="placa_carro"  value="{{$carro->placa_carro}}"/>
                </div>
                <div>
                    <label for="cor" class="form-label">Cor: </label>
                    <input type="text" class="form-control" id="cor" name="cor"  value="{{$carro->cor}}"/>
                </div>
                <div>
                    <label for="ano_de_fabricacao" class="form-label">Ano de fabricação: </label>
                    <input type="date" class="form-control" id="ano_de_fabricacao" name="ano_de_fabricacao"  value="{{$carro->ano_de_fabricacao}}"/>
                </div>
                <div>
                    <a href="/carro" class="form-label">Novo</a>
                    <input type="hidden" id="id" name="id" value="{{$carro->id}}"/>
                    <button type="submit" class="">Salvar</button>
                </div>
            </form>
        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo do veiculo</th>
                    <th>Placa do carro</th>
                    <th>Cor</th>
                    <th>Ano de fabricação</th>
                    <th>Edite</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carros as $carro)
                    <tr>
                        <td>{{$carro->marca}}</td>
                        <td>{{$carro->modelo_do_veiculo}}</td>
                        <td>{{$carro->placa_carro}}</td>
                        <td>{{$carro->cor}}</td>
                        <td>{{$carro->ano_de_fabricacao}}</td>
                        <td>
                            <a href="/carro/{{$carro->id}}/edit">Editar</a>
                        </td>
                        <td>
                            <form action="/carro/{{$carro->id}}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" onclick="return confirm ('Tem Certeza?');">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>