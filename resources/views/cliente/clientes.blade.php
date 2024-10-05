@extends('home')

@section('content')

<div class="container"> <!-- Contenedor que ajusta el tamaño -->
    <div class="row justify-content-center"> <!-- Centra el contenido horizontalmente -->
        <div class="col-md-8"> <!-- Ajusta el tamaño de la columna a 8 de 12 columnas de Bootstrap -->
            <br><br>
            <h3 class="text-center">LISTA DE CLIENTES</h3> <!-- Texto centrado -->
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                NUEVO
            </button>
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class="bg-dark text-light    ">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">TELEFONO</th>
                            <th>CORREO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td scope="row">{{ $cliente->id }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>{{ $cliente->correo }}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$cliente->id}}">Editar</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$cliente->id}}">Eliminar</button>
                            </td>     
                        </tr>
                        @include('cliente.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('cliente.create')
        </div>
    </div>
</div>

@endsection
