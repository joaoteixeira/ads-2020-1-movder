@extends('layouts.principal')

@section('title','Excluir')

@section('content')
    <p class="text-danger">
        Desejar excluir Itinerario?
    </p> 

    <form action="{{ route('itinerarios.destroy', $itinerario->id) }}" method="post">
                      @csrf
                      @method('DELETE')

                      <button class="btn btn-warning" type="submit">Sim</button>
                      <a href=" {{ route('itinerarios.index')}}" class="btn btn-danger" >Cancelar</a>
                      </form>   
                     @endsection