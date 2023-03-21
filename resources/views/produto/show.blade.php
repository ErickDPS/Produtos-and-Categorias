<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Produtos</title>
    <body>
        <b><i>Produto:</i><b>
        <br>
        <b>Categoria:</b> {{ $produto->categoria->nome }} <br>
        <b>Nome:</b> {{ $produto-> nome }} <br>
        <b>Quantidade:</b> {{ $produto-> quantidade }} <br>
        <b>Valor:</b> {{ $produto-> valor }} <br>
        <br><br>
        
        <b><i>Nada</i></b>

    </body>
</html>