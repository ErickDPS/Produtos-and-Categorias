<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Categorias</title>

        <div class="container">
    <a class="btn btn-success btn-lg btn-block rounded-0" href="{{ url('categoria/create') }}">Criar</a>

    <table class="table table-striped table-dark">
        <tr>
            <th>Nome</th>
            <th colspan="3">Ação</th>
        </tr>
        @foreach ($categoria as $value)
        <tr>
            <td>{{ $value->nome }}</td>
            
            <td>
                <a class="btn btn-primary" href="{{ url('categoria/' . $value->id) }}">Visualizar</a>
            <td>
                <a class="btn btn-warning" href="{{ url('categoria/' . $value->id . '/edit') }}">Editar</a>
            </td>

            <td>
                {!! Form::open(['url' => 'categoria/'. $value->id, 'method' => 'delete']) !!}
                {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4">
                <a class="btn btn-secondary btn-lg btn-block rounded-0" href="{{ url('produto/') }}">Editar Produtos</a>
            </td>
        </tr>
    </table>
</div>

    </body>
</html>