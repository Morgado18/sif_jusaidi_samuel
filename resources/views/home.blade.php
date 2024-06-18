@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <style>
                    .card{
                        width: 200px;
                        border: 0;
                        font-weight: 700;
                        letter-spacing: 1.5px;
                    }
                </style>
                <div class="card text-left">
                  <img class="card-img-top" src="holder.js/100px180/" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Nova versão</h4>
                    <a href="/dashboard">Dashbord2</a>
                  </div>
                </div>

                <div class="row">
                    <div class="card m-3 bg-primary text-light">
                        <div class="card-body">
                           {{$usuarios_tot}} | Total de Usuários
                        </div>
                    </div>

                    <div class="card m-3 bg-warning text-light">
                        <div class="card-body">
                           {{$pessoas_tot}} | Total de Pessoas
                        </div>
                    </div>

                     <div class="card m-3 bg-warning text-light">
                        <div class="card-body">
                            {{$empreendedores_tot}} | Total de Empreendedores
                        </div>
                    </div>


                    <div class="card m-3 bg-danger text-light">
                        <div class="card-body">
                           {{$investidores_tot}} | Total de Investidores
                        </div>
                    </div>
                </div>

                <h3>Listando usuários</h3>
                <table class="table table-hover mt-4">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>{{--
                        <th scope="col">Handle</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{$usuario->id}}</th>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>

                            {{--     <td>@mdo</td> --}}
                            </tr>
                            <tr>
                               {{--  {{{-- {-- <th scope="row">fff{{$investidor->id_pessoa}}</th> --}}
                                    {{-- <td>{{$investidor->name}}</td>
                                    <td>{{$investidor->email}}</td>
                                    <td>{{$investidor->contactoinvestidor}}</td>
                                    <td>{{$investidor->areasDeInteresseDeInvestimento}}</td>
                                    <td>{{$investidor->historicoDeInvestimento}}</td>
                            </tr>
                            {{--  <tr>
                               <th scope="row">{{$empreendedor->id_pessoa}}</th>
                                <td>{{$empreendedor->name}}</td>
                                <td>{{$empreendedor->email}}</td>
                                <td>{{$empreendedor->email}}</td>
                                    <td>{{$empreendedor->contactoinvestidor}}</td>
                                    <td>{{$empreendedor->areasDeInteresseDeInvestimento}}</td>
                                    <td>{{$empreendedor->historicoDeInvestimento}}</td>
                             </tr> --}}

                        @endforeach
                    </tbody>
                  </table>

        </div>
    </div>
</div>
@endsection
