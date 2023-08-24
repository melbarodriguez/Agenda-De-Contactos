@extends('Plantilla.plantilla')

@section('titulo','index')

@section('contenido')

<h1><center>Tabla de Contactos (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('contactos.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Numero de Telefono</th>
        <th>Editar</th>
        <th>Eliminar</th>

    </thead>
    <tbody>
        @forelse($contactos as $contacto)
        <tr>
        <td><a href= "{{route('contacto.show', ['id'=>$contacto->id])}}" >{{$contacto->id}}</a></td>  
        <td>{{$contacto->nombre}}</td>
        <td>{{$contacto->apellido}}</td>
        <td>{{$contacto->correo_electronico}}</td>
        <td>{{$contacto->telefono}}</td> 

        <td><a class="btn btn-outline-warning btn-lg" href="{{route('contactos.editar',  ['id'=>$contacto->id])}}">Editar</a></td>
        
        <td>

        <form  method="post" action="{{route('contactos.borrar',[$contacto->id])}}">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn-outline-info btn-lg">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty
        <tr>
            <td>No hay contactos</td>
        </tr>
        @endforelse

    </tbody>
</table>

{{ $contactos->render('pagination::bootstrap-4') }}

@endsection()