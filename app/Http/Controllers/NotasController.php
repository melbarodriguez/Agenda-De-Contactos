<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Nota;

class NotasController extends Controller
{
    public function index()
    {
        $nota = Nota::paginate(10); 
        return view('Nota.Index')->with('notas',$nota);
    } 

    public function create()
    {
        return view('Nota.Create'); 
    } 

    public function store(Request $request)
    {
        $request->validate([
            'texto'=>'required|regex:/[A-Z][a-z]+/i', 
            'fecha'=>'required|date',
            'contacto_id'=>'required|regex:/[0-9]', 

        ]); 
        
        $nota = new Nota(); 
        $nota->texto=$request->input('texto');
        $nota->fecha=$request->input('fecha');
        $nota->contacto_id=$request->input('contacto_id');

        $nota->save(); 

        return redirect()->route('nota.index');
    }

    public function show(string $id)
    {
        $nota = Nota::findOrfail($id); 
        return view('Nota.Show' , compact('nota'));
    }

    public function edit(string $id)
    {
        $nota = Nota::findOrfail($id); 
        return view('Nota.Edit')->with('notas',$nota);
    } 

    public function update(Request $request, string $id)
    {
        $nota = Nota::findOrfail($id); 

        $request->validate([
            'texto'=>'required|regex:/[A-Z][a-z]+/i', 
            'fecha'=>'required|date',
            'contacto_id'=>'required|regex:/[0-9]/',
    
        ]); 
        
        $nota->texto=$request->input('texto');
        $nota->fecha=$request->input('fecha');
        $nota->contacto_id=$request->input('contacto_id');

        $nota->save();

        return redirect()->route('nota.index');
    } 

    public function destroy(string $id)
    {
        Nota::destroy($id);

        return redirect()->route('nota.index');
    }
}
