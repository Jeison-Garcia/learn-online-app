@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del usuario']) !!}

            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror

        </div>

            {!! Form::submit('Editar Usuario', ['class' => 'btn btn-primary']) !!}

        {!! Form::close('') !!}
    </div>
</div>
@stop