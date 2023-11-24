<?php

namespace App\Http\Controllers;

use App\Models\Superviviente;
use App\Models\Ubicaciones;
use App\Models\Articulos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupervivienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervivientes= DB::table('supervivientes')
        ->join('ubicaciones','ubicaciones.superviviente_id','=','supervivientes.id')
       ->join('articulos','articulos.superviviente_id','=','supervivientes.id')
        ->get();
        return view('vista',compact('supervivientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $var =new Superviviente();
       $var->nombre =$request->nombre;
       $var->edad =$request->edad;
       $var->sexo =$request->sexo;
       $var->save();

       $ubi= new Ubicaciones();
       $ubi->latitud=$request->lat;
       $ubi->longitud=$request->long;
       $ubi->precision=$request->presc;
       $ubi->superviviente_id=$var->id;
       $ubi->save();

       $art=new Articulos();
       $art->nombre=$request->articulo;
       $art->cantidad=$request->cantidad;
       $art->puntos=$request->puntos;
       $art->superviviente_id=$var->id;
       $art->save();



       
      return redirect('vista');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
