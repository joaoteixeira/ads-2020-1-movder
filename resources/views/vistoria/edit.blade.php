@extends('layouts.principal')

@section('title','Vistorias')
@section('content')

<br>
<div  class="col-md-6 offset-md-3">

        <form action="/vistorias/{{ $vistoria->id }}" method="post" class="font-weight-bold" class="text-lowercase"> 
            @csrf 
            @method('PUT')
                
            <div style="width: 150px;" class="form-group">
                <label for="">Prefixo</label>
                <input type="text" class="form-control" id="" name="prefixo" value="{{ $vistoria->prefixo}}">
            </div>    
            <div style="width: 150px;" class="form-group">
                <label for="">Placa</label>
                <input type="text" class="form-control" id="" name="placa" value="{{ $vistoria->placa}}">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Empresa</label>
                <input type="text" class="form-control" id="" name="empresa" value="{{ $vistoria->empresa}}">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Data De Vencimento</label>
                <input type="date" class="form-control" id="" name="vencimento" value="{{ $vistoria->vencimento}}">
            </div> 

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/vistorias" class="btn btn-danger">Cancelar</a>
        </form>    
        @endsection