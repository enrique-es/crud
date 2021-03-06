<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $personas= Persona::all();//crea un arreglo de todos los registros
        return view("personas.index", compact("personas")); //devuelve la vista index y devuelve el arreglo en formato clave valor
        //$persona=Persona::all();
        //return response()->json($persona);
    }
    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("personas.create");
        $persona = new Persona;
        $persona->Nombre=$request->Nombre;
        $persona->Apellido=$request->Apellido;
        $persona->Email=$request->Email;
        $persona->Edad=$request->Edad;
        $persona->Telefono=$request->Telefono;
        $persona->save();
        //return response()->json($persona);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Instancia el objeto para poder asignar sus valores correspondientes
    {
        $persona = new Persona;
        $persona->Nombre=$request->Nombre;
        $persona->Apellido=$request->Apellido;
        $persona->Email=$request->Email;
        $persona->Edad=$request->Edad;
        $persona->Telefono=$request->Telefono;
        $persona->save();

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $persona=Persona::findOrFail($id); //asignamos el valor del id a la variable persona
        return response()->json($persona);
        //return view("personas.show", ["persona"=>$persona]); //regresamos a la vista "show" el array de persona en formato clave valor

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona=Persona::findOrFail($id);
        return view("personas.edit", compact("persona"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //Actualizamos los registros
    {
        $persona=Persona::findOrFail($id);
        $persona->update($request->all());
        return redirect("/personas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $persona=Persona::findOrFail($id); //Si existe el registro lo asignamos a una variable; si no, lanzamos una excepcion 
        $persona->delete(); //al encontrarlo lo elimina
        return redirect("/personas");  //nos redirige a la vista ue muestra todos los registros
    }

    public function temperatura()
    {   
        $fecha = Persona::whereDay('Fecha',23)->get();
        //$fecha2 = Persona::whereDay('Fecha', 2)->get();
        // dd(datatemp::whereDay('Fecha', 25)->orWhereDay('Fecha', 26)->get());
        //$temperature = datatemp::where('Luminosidad',37)->take(20)->get();
        return view("personas.intervalo", [
            "tiempo" => $fecha,        
        ]);
    }

    public function getPersonas(){
        $persona=Persona::all();
        return response()->json($persona);
    }

    public function calendario(){

        return view ('calendario');
    }

    public function date(){
        return view('personas.date');
    }


}   
