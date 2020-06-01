@extends('layouts.principal')

@section('title','Itinerarios')
@section('content')


<div  class="col-md-6 offset-md-3">

        <form action="/itinerarios/{{ $itinerario->id }}" method="post" class="font-weight-bold" class="text-lowercase"> 
            @csrf 
            @method('PUT')
                
            <div style="width: 150px;" class="form-group">
                <label for="">Linha</label>
                <input type="text" class="form-control" id="" name="linha" value="{{ $itinerario->linha}}">
            </div>    
            <div style="width: 150px;" class="form-group">
                <label for="">Empresa</label>
                <input type="text" class="form-control" id="" name="empresa" value="{{ $itinerario->empresa}}">
            </div> 
            <div style="width: 250px;" class="form-group">
                <label for="">Itinerario</label>
                <input type="text" class="form-control" id="" name="itinerario" value="{{ $itinerario->itinerario}}">
            </div> 

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/itinerarios" class="btn btn-danger">Cancelar</a>
        </form>    
        @endsection