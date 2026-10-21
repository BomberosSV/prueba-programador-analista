@extends('layout/app')
@section('titulo', 'Proveedores')

@section('contenido')
    <h1>Listado de proveedores</h1>
    <a href="{{ route('proveedores.create') }}" class="btn btn-primary my-3">
    Agregar nuevo
    </a>
    <div class="row">
        <div class="col-12">
            <table class="table">
               <tr>
                 <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Representante</th>
                <th>Telefono representante</th>
                <th>Acciones</th>
               </tr>
               @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->id }}</td>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>{{ $proveedor->representante }}</td>
                        <td>{{ $proveedor->telefono_representante }}</td>
                        <td class="text-center">
                            <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-warning my-3">
                                 Editar
                            </a>
                            <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este proveedor?');" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
               @endforeach
            </table>
        </div>
    </div>
@endsection