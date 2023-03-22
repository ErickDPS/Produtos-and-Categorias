@extends('adminlte::page')

@section('content')

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

@endsection