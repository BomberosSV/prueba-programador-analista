@extends('layout/app')
@section('titulo', 'Editar proveedore')

@section('contenido')
    <h1>Agregar proveedor</h1>
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="post">
         @method('PUT')
        <div class="row">
            <div class="col-6">
                <label for="nombre">Nombre:</label>
                <input class="form-control" type="text" name="nombre" id="nombre" required value="{{$proveedor->nombre}}">
            </div>
             <div class="col-6">
                <label for="telefono">Teléfono:</label>
                <input class="form-control" type="text" name="telefono" id="telefono" required value="{{$proveedor->telefono}}">
            </div>
        </div>

         <div class="row mt-3">
            <div class="col-6">
                <label for="representante">Representante:</label>
                <input class="form-control" type="text" name="representante" id="representante" required value="{{$proveedor->representante}}">
            </div>
             <div class="col-6">
                <label for="telefono_representnate">Teléfono representante:</label>
                <input class="form-control" type="text" name="telefono_representante" id="telefono_representante" required value="{{$proveedor->telefono_representante}}">
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
    
@endsection