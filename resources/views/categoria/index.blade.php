@extends('adminlte::page')

@section('content')

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
                <a class="btn btn-secondary btn-lg btn-block rounded-0" href="{{ url('/produto') }}">Editar Produtos</a>
            </td>
        </tr>
    </table>
</div>

@endsection