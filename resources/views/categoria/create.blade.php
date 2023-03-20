<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>categorias</title>
    <body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        {!! Form::open(['url' => 'categoria/create']) !!}

        {!! Form::label('nome', 'Nome') !!}<br>
        {!! Form::text('nome') !!}<br>

        {!! Form::submit('Enviar') !!}<br>
        {!! Form::close() !!}
    </body>
</html>