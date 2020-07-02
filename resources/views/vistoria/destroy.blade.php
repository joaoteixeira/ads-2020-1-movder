@extends('layouts.principal')

@section('title','Excluir')

@section('content')
    <p class="text-danger">
        Desejar excluir Vistoria?
    </p> 

    <form action="{{ route('vistorias.destroy', $vistoria->id) }}" method="post">
                      @csrf
                      @method('DELETE')

                      <button class="btn btn-warning" type="submit">Sim</button>
                      <a href=" {{ route('vistorias.index')}}" class="btn btn-danger" >Cancelar</a>
                      </form>   
                     @endsection