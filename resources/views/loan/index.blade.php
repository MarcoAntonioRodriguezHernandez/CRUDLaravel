@extends('layouts.app')
@section('content')
    <div class="container">


        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <a href="{{url('/loan/create')}}" class="btn btn-success">Agregar nuevo prestamo</a>
        <table class="table table-light">
            <thead class="thead-light">
            <tr>
                <th>Id del prestamo</th>
                <th>Fecha del prestamo</th>
                <th>Fecha de devolución</th>
                <th>Nombre del prestatario</th>
                <th>Nombre del Libro</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($loans as $loan)
                <tr>
                    <td>{{ $loan->id}}</td>
                    <td>{{ $loan->date_loan}}</td>
                    <td>{{ $loan->date_return}}</td>
                    <td>{{ $loan->people->name}} {{ $loan->people->surname}}</td>
                    <td>{{ $loan->book->title}}</td>
                    <td><a href="{{url('/loan/'.$loan->id.'/edit')}}" class="btn btn-warning"> Editar </a> |

                        <form action="{{url('/loan/'.$loan->id.$loan->people->id)}}" class="d-inline" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit"
                                   onclick="return confirm('¿Deseas borrar totalmente el registro?')"
                                   value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection