<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Produtos</title>

        <div class="container">
    <a class="btn btn-success btn-lg btn-block rounded-0" href="{{ url('produto/create') }}">Criar</a>

    <table class="table table-striped table-dark">
        <tr>
            <th>Categoria</th>
            <th>Nome</th>
            <th colspan="3">Ação</th>
        </tr>
        @foreach ($produto as $value)
        <tr>
            <td>
                {{ $value->categoria->nome}}
            </td>

            <td>{{ $value->nome }}</td>
            
            <td>
                <a class="btn btn-primary" href="{{ url('produto/' . $value->id) }}">Visualizar</a>
            <td>
                <a class="btn btn-warning" href="{{ url('produto/' . $value->id . '/edit') }}">Editar</a>
            </td>

            <td>
                {!! Form::open(['url' => 'produto/'. $value->id, 'method' => 'delete']) !!}
                {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="5">
                <a class="btn btn-secondary btn-lg btn-block rounded-0" href="{{ url('categoria/') }}">Editar Categorias</a>
            </td>
        </tr>
    </table>
</div>

    </body>
</html>