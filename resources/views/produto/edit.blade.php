<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produto</title>
    <body>
        {!! Form::open(['url' => 'produto/' . $produto->id , 'method' =>  'put']) !!}

        {!! Form::label('nome', 'Nome') !!}<br>
        {!! Form::text('nome', $produto->nome) !!}<br>

        {!! Form::label('quantidade', 'Quantidade') !!}<br>
        {!! Form::text('quantidade', $produto->quantidade) !!}<br>

        {!! Form::label('valor', 'Valor') !!}<br>
        {!! Form::text('valor', $produto->valor) !!}<br>

        {!! Form::submit('Enviar') !!}<br>

        {!! Form::close() !!}
    </body>
</html>