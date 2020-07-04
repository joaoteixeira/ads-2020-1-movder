@extends('layouts.principal')

@section('title','Movimentos')
@section('content')
<br>


<div class="mx-auto " style="width: 1300px;" class="container-fluid ">
<a href="{{ route('movimentos.create') }}" class="btn btn-primary mb-3" role="button">ADICIONAR NOVO MOVIMENTO</a>

        <div class="">
                <div class="input-group mb-4">
                  <div class="input-group-prepend" >
                    <span class="input-group-text" id="inputGroup-sizing-default" >DATA</span>
                  </div>
                  <input type="date"  aria-label="Data" aria-describedby="inputGroup-sizing-default" name="data">
                  <div class="input-group-prepend ml-4">
                      <span class="input-group-text">Nome dos Fiscais</span>
                    </div>
                    <input type="text" aria-label="primeiro nome"  aria-describedby="inputGroup-sizing-default" name="fiscais">
                    <button type="submit" class="btn btn-primary ml-4"  style="width: 200px; ">Salvar</button>
                </div>
          </div>
        
          
          <div class="">
                   <table class="table table-hover table-bordered" >
                        <thead>
                        <tr>
                            <td>#</td>
                            <th scope="col">Itinerário</th>
                            <th scope="col">Linha</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Chegada</th>
                            <th scope="col">Saida</th>
                            <th scope="col">Quant. De Passageiros</th>
                            <th scope="col">Veículo</th>
                            <th scope="col">Data de Vencimento</th>
                          </tr>
                        </thead>

                        
                        
                        <tbody>
                        @foreach ($movimentos as $movimento)
                        <tr>
                              <th>{{$loop->iteration}}</th>
                              <th></th>
                              <th></th>
                              <td>{{$movimento->data}}</td>
                              <td>{{$movimento->fiscal}}</td>
                              <td>{{$movimento->empresa}}</td>
                              <td>{{$movimento->hora_chegada}}</td>
                              <td>{{$movimento->hora_saida}}</td>
                              <td>{{$movimento->quant_passageiros}}</td>
                              
                              <td><a href="/movimentos/{{ $movimento->id}}/edit" class="btn btn-success">Editar teste</button>

                                  <a href="{{route ('movimentos.destroy-confirm', $movimento->id) }}"> Excluir </a>
                              </td>
                </tr>
              @endforeach
          </table>
        </div>
        @endsection