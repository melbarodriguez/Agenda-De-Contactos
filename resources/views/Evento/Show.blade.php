@extends('Plantilla.plantilla') 

@section('titulo','show')

@section('contenido') 

<h1><center>Mostrar Eventos (SHOW)</center></h1>

<h6>
    <b>Id</b>
</h6>
<p>{{$evento->id}}</p>

<h6>
    <b>Titulo</b>
</h6>
<p>{{$evento->titulo}}</p>

<h6>
    <b>Descripcion</b>
</h6>
<p>{{$evento->descripcion}}</p>

<h6>
    <b>Fecha_inicio</b>
</h6>
<p>{{$evento->fecha_inicio}}</p>

<h6>
    <b>Fecha_fin</b>
</h6>
<p>{{$evento->fecha_fin}}</p>

<h6>
    <b>Contacto_id</b>
</h6>
<p>{{$evento->contacto_id}}</p>

@endsection()