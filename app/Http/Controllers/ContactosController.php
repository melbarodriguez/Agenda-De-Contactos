<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Contacto;

class ContactosController extends Controller
{

    public function index() 
    {
        $contacto = Contacto::paginate(10); 
        return view('Contacto.Index')->with('contactos',$contacto);
    }

    public function create() 
    {  
        return view('Contacto.Create'); 
    }

    public function store(Request $request)
    {
       $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i',
            'apellido'=>'required|regex:/[A-Z][a-z]+/i',
            'correo_electronico'=>'required|unique:contactos|Email', 
            'telefono'=>'required|regex:/[0-9]/'
        ]); 
        
        $contacto = new Contacto(); 
        $contacto->nombre=$request->input('nombre');
        $contacto->apellido=$request->input('apellido');
        $contacto->correo_electronico=$request->input('correo_electronico');
        $contacto->telefono=$request->input('telefono');

        $contacto->save();

        return redirect()->route('contacto.index');
    }

    public function show(string $id)
    {

        $contacto = Contacto::findOrfail($id); 
        return view('Contacto.Show' , compact('contacto'));
    }


    public function edit(string $id)
    {
        $contacto = Contacto::findOrfail($id); 
        return view('Contacto.Edit')->with('contactos',$contacto);
    }

   
    public function update(Request $request, string $id)
    {

        $contacto = Contacto::findOrfail($id); 

        $request->validate([
            'nombre'=>'required|regex:/[A-Z][a-z]+/i', 
            'apellido'=>'required',
            'correo_electronico'=>['required',
            'Email',Rule::unique('contactos')->ignore($contacto->id)],
            'telefono'=>'required|regex:/[0-9]/',
    
        ]); 
        
        $contacto->nombre=$request->input('nombre');
        $contacto->apellido=$request->input('apellido');
        $contacto->correo_electronico=$request->input('correo_electronico');
        $contacto->telefono=$request->input('telefono');

        $contacto->save(); 

        return redirect()->route('contacto.index');
    }

    public function destroy(string $id)
    {
        Contacto::destroy($id);

        return redirect()->route('contacto.index');
    }
}