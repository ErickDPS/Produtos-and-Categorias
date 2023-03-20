<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Categorias</title>
    <body>
        <b><i>Categorias:</i><b>
        <br>
        <b>Nome:</b> {{ $categoria->nome }} <br>
    </body>
</html>