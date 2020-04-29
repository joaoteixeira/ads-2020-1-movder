@extends('layouts.principal')

@section('title','Itinerário')
@section('content')

<br>
<div  class="col-md-6 offset-md-3">

        <form action="{{ route('itinerarios.store') }}" method="post" class="font-weight-bold" class="text-lowercase"> 
            @csrf 
            <h1>Novo Itinerário</h1>    
            <div style="width: 150px;" class="form-group">
                <label for="">Linha</label>
                <input type="text" class="form-control" id="" name="linha">
            </div>    
            <div style="width: 150px;" class="form-group">
                <label for="">Empresa</label>
                <input type="text" class="form-control" id="" name="empresa" class="text-lowercase">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Itinerario</label>
                <input type="text" class="form-control" id="" name="itinerario" class="text-lowercase">
            </div> 
            
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/itinerarios" class="btn btn-danger">Cancelar</a>
        </form>    
        @endsection