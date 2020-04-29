@extends('layouts.principal')

@section('title','Vistorias')
@section('content')

<br>
<div class="mx-auto" style="width: 900px;">

  <a href="{{ route('vistorias.create') }}" class="btn btn-primary mb-3" role="button">ADICIONAR NOVO VEÍCULO</a>
        
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
                <th scope="col">Prefixo</th>
                <th scope="col">Placa</th>
                <th scope="col">Empresa</th>
                <th scope="col">Data de Vencimento</th>
                <th scope="col">Opções</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($vistorias as $vistoria)
                <tr class="mx-auto">
                  <td>{{$loop->iteration}}</td>
                  <td>{{$vistoria->prefixo}}</td>
                  <td>{{$vistoria->placa}}</td>
                  <td>{{$vistoria->empresa}}</td>
                  <td>{{$vistoria->vencimento}}</td>
                  <td><a href="/vistorias/{{ $vistoria->id}}/edit" class="btn btn-success">Editar</button>
                      <a href="/vistorias/{{ $vistoria->id}}/edit" class="btn btn-danger">Deletar</button>
                  </td>
                  
                </tr>
              @endforeach
          </table>
        </div>
        @endsection
                 
