@extends('adminlte::page')

@section('title', 'Editar área')

@section('content_header')
    <h1>Editar área</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

<div class="card">
    <div class="card-body">
        {!! Form::model($area, ['route' => ['admin.areas.update', $area], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la nueva área']) !!}

                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la nueva área', 'readonly']) !!}

                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            {!! Form::submit('Editar Área', ['class' => 'btn btn-primary']) !!}

        {!! Form::close('') !!}
    </div>
</div>
@stop

@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection