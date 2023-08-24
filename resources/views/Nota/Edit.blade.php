@extends('Plantilla.plantilla')

@section('titulo','edit')

@section('contenido') 

<h1>Editar Nota (Edit)</h1>

@if ($errors->any())                                 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('notas.update',[$notas->id])}}">
@method("PUT")
@csrf 

<div>
   Texto
   <input type="text" name="texto" id="texto" 
   placeholder="Ingrese el Texto de la Nota" value="{{old('texto')}}">
</div>

<br>
<div>
   Fecha
   <input type="date" name="fecha" id="fecha" 
   placeholder="Ingrese Fecha y Hora en la que se creó la Nota" value="{{old('fecha')}}">
</div>

<br>
<div>
   Contacto_id
   <input type="number" name="contacto_id" id="contacto_id" 
   placeholder="identificador del contacto al que pertenece la nota" value="{{old('contacto_id')}}">
</div>

<br>
<div>
<input type="submit" value="Guardar">
</div>

</form>

@endsection()