<?php

namespace App\Http\Controllers\Vistorias;

use App\Vistoria;//trasf. conf. da MODEL
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class VistoriasContoller extends Controller
{
    private $vistoria;
    public function _construct(Vistoria $vistoria)
    {
        $this->vistoria = $vistoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vistorias = Vistoria::all();
        return view('vistoria.vistorias', array('vistorias'=>$vistorias));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $vistoria = new Vistoria();
        $vistoria->prefixo =$request->prefixo;
        $vistoria->placa =$request->placa;
        $vistoria->empresa =$request->empresa;
        $vistoria->vencimento =$request->vencimento;

        $vistoria->save();*/
        $vistoria = Vistoria::create($request->all());

        return redirect('vistorias')->with('status', "Vistoria Cadastrada com Sucesso!!!");
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
        $vistoria = Vistoria::find($id);
        return view('vistoria.edit', array('vistoria' => $vistoria)) ;
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
        $vistoria = Vistoria::find($id);
        $vistoria->update($request->all());

        return redirect('vistorias')->with('statusUpdate', "Vistoria atualizado com Sucesso!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vistoria = Vistoria::find($id);

        $vistoria->delete();

        return redirect('vistorias')->with('statusUpdate', "Vistoria excluido com Sucesso!!!");
    }

    public function destroyConfirm($id)
    {
        $vistoria = Vistoria::find($id);

        return view('vistoria.destroy', ['vistoria'=> $vistoria]);
    }
}
