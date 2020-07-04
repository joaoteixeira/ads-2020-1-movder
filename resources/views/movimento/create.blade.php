@extends('layouts.principal')

@section('title','Movimento Diário')
@section('content')

<br><br>
<div  class="col-md-6 offset-md-3">

        <form action="{{ route('movimentos.store') }}" method="post" class="font-weight-bold" class="text-lowercase"> 
            @csrf 
            <h1>Novo Movimentos   sskhddh</h1> 
                
            <div style="width: 150px;" class="form-group">
                <label for="">data</label>
                <input type="date" class="form-control" id="" name="data" class="text-lowercase">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">fiscal</label>
                <input type="text" class="form-control" id="" name="fiscais" class="text-lowercase">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">empresa</label>
                <input type="text" class="form-control" id="" name="empresa" class="text-lowercase">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Chegada</label>
                <input type="time" class="form-control" id="" name="hora_chegada" class="text-lowercase">
            </div>
            <div style="width: 250px;" class="form-group">
                <label for="">Saida</label>
                <input type="time" class="form-control" id="" name="hora_saida" class="text-lowercase">
            </div>
            <div style="width: 250px;" class="form-group">
                <label for="">Quantidade de Passageiros</label>
                <input type="text" class="form-control" id="" name="quant_passageiros" class="text-lowercase">
            </div>
            
            <div class="form-group">
            <label for="">Data</label>
            <input class="form-control" type="text" value="{{ date('d/M/Y') }}" disabled>
        </div>
        <div class="form-group">
            <label for="">Cliente</label>
            <select name="cliente" class="form-control">
                <option>Selecione um cliente</option>

                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Status da OS</label>
            <input class="form-control" type="text" value="Aberto" disabled>
        </div>

        <button type="submit" class="btn btn-primary">Abrir OS</button>
            

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/vistorias" class="btn btn-danger">Cancelar</a>
        </form>    
        @endsection