@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Editar Entrada</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('confirmEdit', ['id' => $entry->id])}}" class="form-group">
                        @csrf
                        @method('PUT')
                        <label class="form-label">Nombre del Proyecto
                            <input type="text" name="nombreProyecto" required value="{{$entry->nombreProyecto}}" class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Fuente Fondos
                            <input type="text" name="fuenteFondos" required value="{{$entry->fuenteFondos}}" class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Monto Planificado
                            <input type="number" name="montoPlanificado" required value="{{$entry->montoPlanificado}}" class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Monto Patrocinado
                            <input type="number" name="montoPatrocinado" required value="{{$entry->montoPatrocinado}}" class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Monto de Fondos Propios
                            <input type="number" name="montoFondosPropios" required value="{{$entry->montoFondosPropios}}" class="form-control">
                        </label>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Cambiar Entrada
                            </button>
                            <a href="{{route('home')}}" class="btn btn-danger">
                                <i class="fas fa-times"></i> Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
