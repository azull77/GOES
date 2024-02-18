@extends('layouts.app')

@section('title' ) El Salvador
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Lista de Proyectos GOES</div>

                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nombre del Proyecto</th>
                                <th>Fuente de los Fondos</th>
                                <th>Monto Planificado</th>
                                <th>Monto Patrocinado</th>
                                <th>Monto de Fondos Propios</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($entries as $entry)
                            <tr>
                                <td>{{$entry->nombreProyecto}}</td>
                                <td>{{$entry->fuenteFondos}}</td>
                                <td>{{$entry->montoPlanificado}}</td>
                                <td>{{$entry->montoPatrocinado}}</td>
                                <td>{{$entry->montoFondosPropios}}</td>
                                <td>
                                    <a href="{{route('editar', ['id' => $entry->id])}}" class="btn btn-success">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>
                                    <a href="{{route('borrar', ['id' => $entry->id])}}" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i> Borrar
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer text-center">
                    <a href="{{route('agregar')}}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Agregar
                    </a>
                    <a href="{{route('report')}}" class="btn btn-danger">
                        <i class="fas fa-file-pdf"></i> Generar PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
