@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <!-- Mensaje de respuesta de la transacción -->
            @if(session()->has('message.level'))
                <div class="alert alert-{{ session('message.level') }}">
                    <button type='button' class='close' data-dismiss='alert'>×</button>
                    {!! session('message.content') !!}
                </div>
            @endif

            <table id="personas" class="table table-striped table-bordered table-responsive" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha Nacimiento</th>
                    <th>Edad</th>
                    <th>Género</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($personas as $persona)
                <tr>
                    <td style="width: auto;">{{ $persona->nombres }}</td>
                    <td style="width: auto;">{{ $persona->apellidos }}</td>
                    <td style="width: auto;">{{ $persona->fecha_nac }}</td>
                    <td style="width: auto;">{{ $persona->edad }}</td>
                    <td style="width: auto;">{{ $persona->genero }}</td>
                    <td style="width: auto;">{{ $persona->email }}</td>
                    <td style="width: auto;">{{ $persona->telefono }}</td>
                    <td><a href="{{ route('personas/editar', $persona) }}" title="Editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit" ></span></a></td>
                    <td><a href="{{ route('personas/eliminar', $persona) }}" onclick="return confirm('El registro será eliminado ¿Está seguro?')" title="Eliminar" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
