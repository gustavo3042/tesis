<?php

namespace App\Http\Controllers;

use App\Models\trabajos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TrabajosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $datos['trabajos']=Trabajos::paginate(5);


    return view('trabajos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //$datostrabajos=request()->all();




    $campos=[
'NombreTrabajo'=>'required|string|max:100',
'FechaFinal'=>'required|date',
'Precio'=>'required|int|max:100',
'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
'DetallesReparacion'=>'required|string|max:200'

    ];


$Mensaje=["required"=>'El :attribute es requerido'];


$this->validate($request,$campos,$Mensaje);

      $datostrabajos=request()->except('_token');



      if ($request->hasFile('Foto')) {


$datostrabajos['Foto']=$request->file('Foto')->store('uploads','public');


      }

//$datostrabajos['Precio']= $datostrabajos['Precio']*0.19;

      Trabajos::insert($datostrabajos);

      //return response()->json($datostrabajos);

        return redirect('trabajos')->with('Mensaje','Trabajo agregado con éxito');

  }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trabajos  $trabajos
     * @return \Illuminate\Http\Response
     */
    public function show(trabajos $trabajos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trabajos  $trabajos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $trabajo= Trabajos::findOrFail($id);

        return view('trabajos.edit',compact('trabajo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trabajos  $trabajos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


  $datostrabajos=request()->except(['_token','_method']);


  if ($request->hasFile('Foto')) {


$trabajo= Trabajos::findOrFail($id);

Storage::delete('public/'. $trabajo->Foto);

$datostrabajos['Foto']=$request->file('Foto')->store('uploads','public');


  }

  Trabajos::where('id','=',$id)->update($datostrabajos);

  //$trabajo= Trabajos::findOrFail($id);

  //return view('trabajos.edit',compact('trabajo'));

return redirect('trabajos')->with('Mensaje','Trabajo modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trabajos  $trabajos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $trabajo= Trabajos::findOrFail($id);

      if(Storage::delete('public/'. $trabajo->Foto)){
        Trabajos::destroy($id);

      }
    return redirect('trabajos')->with('Mensaje','Trabajo eliminado con éxito');
    }
}
