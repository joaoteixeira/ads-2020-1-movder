@extends('layouts.principal')

@section('title','Excluir')

@section('content')
    <p class="text-danger">
        Desejar excluir Movimento?
    </p> 

    <form action="{{ route('movimentos.destroy', $movimento->id) }}" method="post">
                      @csrf
                      @method('DELETE')

                      <button class="btn btn-warning" type="submit">Sim</button>
                      <a href=" {{ route ('movimentos.index') }}" class="btn btn-danger" >Cancelar</a>
                      </form>   
                     @endsection