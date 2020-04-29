@extends('layouts.principal')

@section('title','Itinerário')
@section('content')

<br>
<div class="mx-auto " style="width: 1000px;">

<a href="{{ route('itinerarios.create') }}" class="btn btn-primary mb-3" role="button">ADICIONAR NOVO ITINERÁRIO</a>
  
    @if (session ('status'))
        <div class="alert alert-danger" role="alert" >
            {{session('status')}}
        </div>
      @endif  

      @if (session ('statusUpdate'))
        <div class="alert alert-info" role="alert" >
            {{session('statusUpdate')}}
        </div>
      @endif 
      
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Linha</th>
                <th scope="col">Empresa</th>
                <th scope="col">Itinerário</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
               @foreach($itinerarios as $itinerario)
                <tr class="mx-auto">
                  <td>{{$loop->iteration}}</td>
                  <td>{{$itinerario->linha}}</td>
                  <td>{{$itinerario->empresa}}</td>
                  <td>{{$itinerario->itinerario}}</td>
                  <td><a href="/itinerarios/{{ $itinerario->id}}/edit" class="btn btn-success">Editar</button>
                      <a href="/itinerarios/{{ $itinerario->id}}/edit" class="btn btn-danger">Deletar</button>
                  </td>
                </tr>

              @endforeach
          </table>
        </div>
        @endsection
