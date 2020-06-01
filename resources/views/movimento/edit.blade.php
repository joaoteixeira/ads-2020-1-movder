@extends('layouts.principal')

@section('title','Itinerarios')
@section('content')

<br>
<div  class="col-md-6 offset-md-3">

        <form action="/movimentos/{{ $movimento->id }}" method="post" class="font-weight-bold" class="text-lowercase"> 
            @csrf 
            @method('PUT')

            <div style="width: 250px;" class="form-group">
                <label for="">Itinerario</label>
                <input type="text" class="form-control" id="" name="itinerario" value="{{ $movimento->itinerario}}">
                
            <div style="width: 150px;" class="form-group">
                <label for="">Linha</label>
                <input type="text" class="form-control" id="" name="linha" value="{{ $movimento->linha}}">
            </div>    
            <div style="width: 150px;" class="form-group">
                <label for="">Empresa</label>
                <input type="text" class="form-control" id="" name="empresa" value="{{ $movimento->empresa}}">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Chegada</label>
                <input type="time" class="form-control" id="" name="hora_chegada" value="{{ $movimento->hora_chegada}}">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Saida</label>
                <input type="time" class="form-control" id="" name=">hora_saida" value="{{ $movimento->hora_saida}}">
            </div>
            <div style="width: 250px;" class="form-group">
                <label for="">Quantidade de passageiros</label>
                <input type="text" class="form-control" id="" name="quant_passageiros" value="{{ $movimento->quant_passageiros}}">
            </div>
            <div style="width: 250px;" class="form-group">
                <label for="">Prefixo</label>
                <input type="text" class="form-control" id="" name="prefixo" value="{{ $movimento->prefixo}}">
            </div>
            <div style="width: 250px;" class="form-group">
                <label for="">Vencimento</label>
                <input type="date" class="form-control" id="" name="vencimento" value="{{ $movimento->vencimento}}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/movimentos" class="btn btn-danger">Cancelar</a>
        </form>    
        @endsection