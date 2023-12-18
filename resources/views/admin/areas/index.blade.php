@extends('adminlte::page')

@section('title', 'Lista de áreas')

@section('content_header')
    <h1>Lista de áreas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.areas.create')}}">
                Agregar Área
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($areas as $area)
                        <tr>
                            <td>{{$area->id}}</td>
                            <td>{{$area->nombre}}</td>
                            <td width='10px'>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.areas.edit', $area)}}">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{route('admin.areas.destroy', $area)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop