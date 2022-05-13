@extends('plantilla')

@section('content')

    <div class="row">
        <div class="col-md-7">
            <div class="col-md-5">
                <h3 class="text-center mb-4">Agregar Notas </h3>
                <form action="{{route('agregar')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre de la nota">
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Nombre de la nota">
                    </div>
                    <button type="submit" class="btn btn-success btn-block"> Enviar Nota</button>
                </form>

            </div>
        </div>
    </div>


@endsection