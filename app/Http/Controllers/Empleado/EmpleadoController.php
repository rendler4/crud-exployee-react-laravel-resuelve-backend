<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $empleados = Empleado::paginate($request->input('per_page', 10));
        return response()->json($empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return response()->json($request->all());
        $request->validate(Empleado::rules());

        return Empleado::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $empleado;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $empleado = Empleado::find($id);        
        if(!$empleado){
            return response()->json(["message"=>'No existe el empleado', "error"=>true],402);
        }        
        $request->validate(Empleado::rules());
        $empleado->update($request->all());
        return $empleado;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado = Empleado::find($id);        
        if(!$empleado){
            return response()->json(["message"=>'No existe el empleado', "error"=>true],402);
        }
        $empleado->delete();

        return response()->json(null, 204);
    }
}
