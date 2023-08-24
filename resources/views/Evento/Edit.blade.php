@extends('Plantilla.plantilla')

@section('titulo','edit')

@section('contenido')

<h1>Editar Evento (Edit)</h1>

@if ($errors->any())                               
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('eventos.update',[$eventos->id])}}">
@method("PUT")
@csrf 

<div>
   Titulo
   <input type="text" name="titulo" id="titulo" 
   placeholder="Ingrese el Titulo del Evento" value="{{old('titulo')}}">
</div>

<br>
<div>
   Descripcion
   <input type="text" name="descripcion" id="descripcion" 
   placeholder="Ingrese la Descripcion del Evento" value="{{old('descripcion')}}">
</div>

<br>
<div>
   Fecha_inicio
   <input type="text" name="fecha_inicio" id="fecha_inicio" 
   placeholder="Ingrese la Fecha de Inicio del Evento" value="{{old('fecha_inicio')}}">
</div>

<br>
<div>
   Fecha_fin
   <input type="text" name="fecha_fin" id="fecha_fin" 
   placeholder="Ingrese la Fecha Fin del Evento" value="{{old('tfecha_fin')}}">
</div>

<br>
<div>
   Contacto_id
   <input type="number" name="contacto_id" id="contacto_id" 
   placeholder="Ingrese el identificador del contacto al que pertenece el evento" value="{{old('contacto_id')}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()