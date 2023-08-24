@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','show') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Mostrar Notas (SHOW)</center></h1>

<h6>
    <b>Id</b>
</h6>
<p>{{$nota->id}}</p>

<h6>
    <b>Texto</b>
</h6>
<p>{{$nota->texto}}</p>

<h6>
    <b>Fecha</b>
</h6>
<p>{{$nota->fecha}}</p>

<h6>
    <b>Contacto_id</b>
</h6>
<p>{{$nota->contacto_id}}</p>

@endsection()