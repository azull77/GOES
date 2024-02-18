@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Nueva Entrada</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('agregando') }}" class="form-group">
                        @csrf
                        <label class="form-label">Nombre del Proyecto
                            <input type="text" name="nombreProyecto" required class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Fuente Fondos
                            <input type="text" name="fuenteFondos" required class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Monto Planificado
                            <input type="number" name="montoPlanificado" required class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Monto Patrocinado
                            <input type="number" name="montoPatrocinado" required class="form-control">
                        </label>
                        <br>
                        <label class="form-label">Monto de Fondos Propios
                            <input type="number" name="montoFondosPropios" required class="form-control">
                        </label>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Guardar
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
