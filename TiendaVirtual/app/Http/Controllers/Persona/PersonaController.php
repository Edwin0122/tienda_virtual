<?php

namespace App\Http\Controllers\Persona;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function index()
    {
        $personas=Persona::paginate();
       return view('persona.index',compact('personas'));
    }


    public function create()
    {
        return view('persona.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($persona)
    {
        //return view('persona.show',['personas'=>$persona]); //Es para pasar la variable a la vista
        //PARA EVITARTODO ESE CODIGO SE PASA UN ARRAY
        return view('persona.show',compact('persona'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
