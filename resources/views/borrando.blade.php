@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Borrar Entrada</div>

                <div class="card-body">
                    <p>¿Seguro que desea borrar la entrada {{$entry->nombreProyecto}}?</p>
                    <hr>
                    <form id="deleteForm" method="POST" action="{{ route('borrando', ['id' => $entry->id]) }}" class="form-group">
                        @csrf
                        @method('DELETE')

                        
                    </form>
                    <button type="button" id="deleteButton" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Borrar
                    </button>
                    <a href="{{route('home')}}" class="btn btn-primary">
                        <i class="fas fa-times"></i> Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById("deleteButton").addEventListener("click", function() {
    if (confirm("¿Seguro que desea borrar la entrada {{$entry->nombreProyecto}}?")) {
        document.getElementById("deleteForm").submit();
    }
});
</script>
@endsection
