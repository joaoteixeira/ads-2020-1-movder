@extends('layouts.principal')

@section('title','Vistorias')
@section('content')

<br><br>
<div  class="col-md-6 offset-md-3">

        <form action="{{ route('vistorias.store') }}" method="post" class="font-weight-bold" class="text-lowercase"> 
            @csrf 
            <h1>Novo Veículo</h1>    
            <div style="width: 150px;" class="form-group">
                <label for="">Prefixo</label>
                <input type="text" class="form-control" id="" name="prefixo">
            </div>    
            <div style="width: 150px;" class="form-group">
                <label for="">Placa</label>
                <input type="text" class="form-control" id="" name="placa" class="text-lowercase">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Empresa</label>
                <input type="text" class="form-control" id="" name="empresa" class="text-lowercase">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Data De Vencimento</label>
                <input type="date" class="form-control" id="" name="vencimento">
            </div> 

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/vistorias" class="btn btn-danger">Cancelar</a>
        </form>    
        @endsection