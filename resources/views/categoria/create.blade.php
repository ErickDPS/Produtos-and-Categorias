@extends('adminlte::page')

@section('content')

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

@endsection