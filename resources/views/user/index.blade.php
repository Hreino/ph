@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>email</th>
                    <th>Empresa</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($datos as $dato)
                <tr>
                    <td>{{$dato -> name}}</td>
                    <td>{{$dato -> email}}</td>
                    <td>{{$dato -> company}}</td>
                    @if ($dato ->role==0)
                        <td>Administrador</td>
                    @endif
                    @if ($dato ->role==1)
                        <td>Coach</td>
                    @endif
                    @if ($dato->role==2)
                        <td>Usuario</td>
                    @endif
                    <td>
                        <form action="{{Route('users.destroy',array($dato->id))}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <a href="{{Route('users.edit',array($dato->id))}}" class="btn  btn-sec-app">Modificar</a>
                            <button class="btn btn-app" type="Submit">Eliminar</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection