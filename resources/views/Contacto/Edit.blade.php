@extends('Plantilla.plantilla')

@section('titulo','edit')

@section('contenido')

<h1>Editar Contacto (Edit)</h1>

@if ($errors->any())                                 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('contactos.update',[$contactos->id])}}">
@method("PUT")
@csrf

<div>
    Nombre
    <input type="text" name="nombre" id="nombre" 
    placeholder="Ingrese El Nombre" value="{{old('nombre') ?? $contactos->nombre}}">
</div>

<br>
<div>
   Apellido
   <input type="text" name="apellido" id="apellido" 
   placeholder="Ingrese El Apellido" value="{{old('apellido') ?? $contactos->apellido}}">
</div>

<br>
<div>
   Correo
   <input type="text" name="correo_electronico" id="correo_electronico" 
   placeholder="Ingrese El Correo" value="{{old('correo_electronico') ?? $contactos->correo_electronico}}">
</div>

<br>
<div>
   Telefono
   <input type="text" name="telefono" id="telefono" 
   placeholder="Ingrese EL telefono" value="{{old('telefono') ?? $contactos->telefono}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()