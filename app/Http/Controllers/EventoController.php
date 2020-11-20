<?php

namespace App\Http\Controllers;
use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if($request){
                $query=trim($request->get('searchText'));   

                $eventos=Evento::where('id','LIKE','%'.$query.'%') 
                ->orderBy('id','ASC')->paginate(3);
                return view('evento.index',["eventos"=>$eventos,"searchText"=>$query]);
            }

        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventos=new Evento;
        $eventos->tipo=$request->get('tipo');
        $eventos->descripcion=$request->get('descripcion');
        $eventos->estado=$request->get('estado');
        $eventos->fecha_registro=$request->get('fecha_registro');
        $eventos->save();
        return Redirect::to('evento');
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
        $eventos=Evento::findOrFail($id);
        return view("evento.edit",["eventos"=>$eventos]);
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
        $eventos=Evento::findOrFail($id);
        $eventos->tipo=$request->get('tipo');
        $eventos->descripcion=$request->get('descripcion');
        $eventos->estado=$request->get('estado');
        $eventos->fecha_registro=$request->get('fecha_registro');
        $eventos->update();
        return Redirect::to('evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos=Evento::findOrFail($id);
        $eventos->delete();
        return Redirect::to('evento');
    }
}
