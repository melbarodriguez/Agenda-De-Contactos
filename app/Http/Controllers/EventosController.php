<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Evento;

class EventosController extends Controller
{
    public function index()
    {
        $evento = Evento::paginate(10);
        return view('Evento.Index')->with('eventos',$evento);
    } 

    public function create()
    {
        return view('Evento.Create'); 
    } 

    public function store(Request $request)
    {
        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i',
            'descripcion'=>'required|regex:/[A-Z][a-z]+/i',
            'fecha_inicio'=>'required|date', 
            'fecha_fin'=>'required|date',
            'contacto_id'=>'required|regex:/[0-9]/',
        ]); 
        
        $evento = new Evento();
        $evento->titulo=$request->input('titulo');
        $evento->descripcion=$request->input('descripcion');
        $evento->fecha_inicio=$request->input('fecha_inicio');
        $evento->fecha_fin=$request->input('fecha_fin');
        $evento->contacto_id=$request->input('contacto_id');


        $evento->save();

        return redirect()->route('evento.index');
    }

    public function show(string $id)
    {
        $evento = Evento::findOrfail($id); 
        return view('Evento.Show' , compact('evento'));
    } 

    public function edit(string $id)
    {
        $evento = Evento::findOrfail($id); 
        return view('Evento.Edit')->with('eventos',$evento);
    }

    public function update(Request $request, string $id)
    {
        $evento = Evento::findOrfail($id); 

        $request->validate([
            'titulo'=>'required|regex:/[A-Z][a-z]+/i',
            'descripcion'=>'required|regex:/[A-Z][a-z]+/i',
            'fecha_inicio'=>'required|date',
            'fecha_fin'=>'required|date',
            'contacto_id'=>'required|regex:/[0-9]/',
        ]); 
        
        $evento->titulo=$request->input('titulo');
        $evento->descripcion=$request->input('descripcion');
        $evento->fecha_inicio=$request->input('fecha_inicio');
        $evento->fecha_fin=$request->input('fecha_fin');
        $evento->contacto_id=$request->input('contacto_id');

        $evento->save(); 

        return redirect()->route('evento.index');
    }

    public function destroy(string $id)
    {
        Evento::destroy($id);

        return redirect()->route('evento.index'); 
    }
}
