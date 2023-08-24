@extends('Plantilla.plantilla')

@section('titulo','show')

@section('contenido')

<h1><center>Mostrar Contactos (SHOW)</center></h1>

<h6>
    <b>Id</b>
</h6>
<p>{{$contacto->id}}</p>

<h6>
    <b>Nombre</b>
</h6>
<p>{{$contacto->nombre}}</p>

<h6>
    <b>Apellido</b>
</h6>
<p>{{$contacto->apellido}}</p>

<h6>
    <b>Correo</b>
</h6>
<p>{{$contacto->correo_electronico}}</p>

<h6>
    <b>Telefono</b>
</h6>
<p>{{$contacto->telefono}}</p>

@endsection()