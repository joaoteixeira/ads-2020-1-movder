<?php

namespace App\Http\Controllers\Itinerario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Itinerario;

class ItinerariosContoller extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itinerarios = Itinerario::all();
        return view('itinerario.index', array('itinerarios'=>$itinerarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('itinerario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $itinerario = Itinerario::create($request->all());
        return redirect('itinerarios')->with('status', "Itinerario Cadastradado com Sucesso!!!");
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
        //Itinerario::find($id);
        $itinerario = Itinerario::find($id);
        return view('itinerario.edit', array('itinerario' => $itinerario)) ;
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
        $itinerario = Itinerario::find($id);
        $itinerario->update($request->all());

        return redirect('index')->with('statusUpdate', "Itinerario atualizado com Sucesso!!!");
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
