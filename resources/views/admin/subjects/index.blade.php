@extends('adminlte::page')

@section('title', 'Lista de Materias')

@section('content_header')
    <h1>Lista de materias</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.subjects.create')}}">
                Agregar Materia
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Area</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{$subject->id}}</td>
                            <td>{{$subject->nombre}}</td>
                            <td>{{$subject->area_id}}</td>
                            <td width='10px'>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.subjects.edit', $subject)}}">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{route('admin.subjects.destroy', $subject)}}" method="POST">
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