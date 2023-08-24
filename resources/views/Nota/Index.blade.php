@extends('Plantilla.plantilla') 

@section('titulo','index') 

@section('contenido')

<h1><center>Tabla de Notas (index)</center></h1>

<button><center><a class="btn btn" href= "{{route('notas.crear')}}"><u>Crear</u></a></center></button>

<table class="table" class="pagination">
    <thead>
        <th>Id</th>
        <th>Texto</th>
        <th>Fecha</th>
        <th>Contacto Id</th>

    </thead>
    <tbody>
        @forelse($notas as $nota)
        <tr>
        <td><a href= "{{route('nota.show', ['id'=>$nota->id])}}" >{{$nota->id}}</a></td>  
        <td>{{$nota->texto}}</td>
        <td>{{$nota->fecha}}</td>
        <td>{{$nota->contacto_id}}</td>
        <td><a href= "{{route('notas.editar', ['id'=>$nota->id])}}" >EDITAR</a></td>  
        
        <td>
        <form  method="post" action="{{route('notas.borrar',[$nota->id])}}">
        @method("DELETE")
        @csrf
         <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
         
        </tr>
        @empty 
        <tr>
            <td>No hay notas</td>
        </tr>
        @endforelse 

    </tbody>
</table>

{{ $notas->render('pagination::bootstrap-4') }} 

@endsection