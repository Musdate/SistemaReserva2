@extends('layouts.app')

@section('title', "Encargados")

@section('content')

    </br><h1>Listado de Encargados</h1></br>

    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="text-align: center;">Rut</th>
                <th scope="col" style="text-align: center;">Nombre</th>
                <th scope="col" style="text-align: center;">Email</th>
                <th scope="col" style="text-align: center;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if($user->tipoUsuarioID == '1')
                    <tr>
                        <th scope="row" style="text-align: center;">{{ $user->rut }}</th>
                        <td style="text-align: center;">{{ $user->nombre}}</td>
                        <td style="text-align: center;">{{ $user->email}}</td>
                        <td style="text-align: center;">

                            <!-- Boton Editar -->
                            <a href="{{ route('encargado.details.route', $user->rut) }}">
                                <button type="submit" class="btn btn-info">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                    </svg>
                                </button>
                            </a>

                            <!-- Boton Eliminar -->
                            <a href="{{ route('encargado.delete.route', $user->rut) }}" class="delete"
                            onclick="return confirm('¿Está seguro que desea ELIMINAR este Encargado?')">
                                <button type="button" class="btn btn-danger">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="black" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endif
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <a href="{{ url('/') }}"><button type="submit" class="btn btn-primary" style="width: 130px;">Volver</button></a></br></br>

@endsection