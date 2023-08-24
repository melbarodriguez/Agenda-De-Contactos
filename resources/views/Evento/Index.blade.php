@extends('Plantilla.plantilla')  

@section('titulo','index') 

@section('contenido') 

<h1><center>Tabla de Evento (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('eventos.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>Id</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Contacto Id</th>

    </thead>
    <tbody>
        @forelse($eventos as $evento) 
        <tr>
        <td><a href= "{{route('evento.show', ['id'=>$evento->id])}}" >{{$evento->id}}</a></td>  
        <td>{{$evento->titulo}}</td>
        <td>{{$evento->descripcion}}</td>
        <td>{{$evento->fecha_inicio}}</td>
        <td>{{$evento->fecha_fin}}</td>
        <td>{{$evento->contacto_id}}</td>
        <td><a href= "{{route('eventos.editar', ['id'=>$evento->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('eventos.borrar',[$evento->id])}}">
        @method("DELETE")
        @csrf
         <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty 
        <tr>
            <td>No hay eventos</td>
        </tr>
        @endforelse 

    </tbody>
</table>

{{ $eventos->render('pagination::bootstrap-4') }} 

@endsection