@extends('adminlte::page')

@section('content')

        <b><i>Produto:</i><b>
        <br>
        <b>Categoria:</b> {{ $produto->categoria->nome }} <br>
        <b>Nome:</b> {{ $produto-> nome }} <br>
        <b>Quantidade:</b> {{ $produto-> quantidade }} <br>
        <b>Valor:</b> {{ $produto-> valor }} <br>
        <br><br>
        
        <b><i>Nada</i></b>

@endsection