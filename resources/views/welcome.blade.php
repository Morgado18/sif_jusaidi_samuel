@extends('templates.main')
@section('title', 'SIF')
@section('header')
@section('name', 'Visitante')
@section('content')
    
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="inicio">Início</a> / sobre nós</span>
          <h3>Fale Connosco </h3>
        </div>
      </div>
    </div>
  </div>

  <!-- animação de entrada -->

  <div id="meuElemento" class="slideEntrada">
    <div class="contact-page section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading">
              <h6>| Contate Nós</h6>
              <h2>Fale Com Os Nossos Agentes</h2>
            </div>
            <p> &nbsp; Nossa equipe dedicada a atendimento ao cliente está sempre pronta para ajudar. <br> Seja por telefone, chat ou e.mail, estamos aqui para esclarecer dúvidas, fornecer <br> Suporte e garantir que sua experência seja positiva em todos os aspectos.   </p>
            <div class="row">
              <div class="col-lg-12">
                <div class="item phone">
                  <img src="{{asset('img/icones/iphone.png')}}" alt="" style="max-width: 52px;">
                  <h6> <a href="tell: +244 942404724">942-404-724</a> <br><span>Número De Telefone</span></h6>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="item email">
                  <img src="{{asset('img/icones/envelope.png')}}" alt="" style="max-width: 52px;">
                  <h6><a href="mailto:sif.info3@gmail.com">sif.info3@gmail.com </a><br><span>Business
                      Email</span></h6>
                </div>
              </div>
            </div>
          </div>

        </div>


        <!-- <div>
          <img src="#" alt="Tinha imagem">
        </div> -->
      </div>
    </div>
  </div>

@endsection

@section('footer') 
    
@endsection

    
