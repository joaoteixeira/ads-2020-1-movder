<?php

namespace App\Http\Controllers\Movimento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movimento;

class MovimentosContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimentos = Movimento::all();
        return view('movimento.index', array('movimentos'=>$movimentos));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimento = Movimento::create($request->all());

        return redirect('movimentos')->with('status', "Movimento Cadastrado com Sucesso!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $movimento =Movimento ::where('id', id)->
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movimento = Movimento::find($id);
        return view('movimento.edit', array('movimento' => $movimento)) ;
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
        $movimento = Movimento::find($id);
        $movimento->update($request->all());

        return redirect('movimentos')->with('statusUpdate', "Vistoria atualizado com Sucesso!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movimento = Movimento::find($id);

        $movimento->delete();

        return redirect('movimentos')->with('statusUpdate', "Movimento excluido com Sucesso!!!");
    }

    public function destroyConfirm($id)
    {
        $movimento = Movimento::find($id);

        return view('movimento.destroy', ['movimento'=> $movimento]);
    }
}
