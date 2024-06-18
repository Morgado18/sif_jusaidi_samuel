@extends('templates.main')
@section('title', 'SIF')

@section('header')
@section('name', 'Cadastrar')
@endsection

@section('content')
<div class="main-banner">
    <div class="owl-carousel owl-banner">
        <div class="item item-1">
            <div class="header-text">
                <div class="unherdar" style="opacity: inherit;">
                    <span class="category">Bem Vindo ao <em>SIF</em></span>
                    <h2>boas!!!<br>ao melhor</h2>
                </div>
            </div>
        </div>
        <div class="item item-2">
            <div class="header-text">
                <div class="unherdar">
                    <span class="category">confie no <em>SIF</em> como seu parceiro confiável </span>
                    <h2>para todas as suas necessidades de financiamento</h2>
                </div>
            </div>
        </div>
        <div class="item item-3">
            <div class="header-text">
                <div class="unherdar">
                    <span class="category">A sua escolha segura </span>
                    <h2>para soluções de financiamento confiáveis e transparentes</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featured section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-image">
                    <img src="{{ asset('img/icones/8953254_prev_ui.png') }}" alt="boneco">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-heading">
                    <h6>| Dúvidas e respostas</h6>
                    <h2>O melhor sistema intermediário do pais!!!</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <!-- Conteúdo do accordion -->
                </div>
            </div>
        </div>
    </div>

    <div id="meuElemento" class="slideEntrada">
        <div class="video section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="section-heading text-center">
                            <h6>| processo de superação </h6>
                            <h2>O melhor para os melhores</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="video-frame">
                            <img src="{{ asset('img/Captura de tela 2024-05-04 224146.png') }}" alt="video">
                            <a href="https://www.youtube.com/watch?v=ox2aTCUsxok" target="_self"><i
                                    class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div>
                        <img src="{{ asset('img/icones/4957136.jpg') }}" alt="IMPOrtante">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="{{ asset('img/icones/iphone.png') }}" alt="" style="max-width: 52px;">
                                <h6>942-404-724<br><span>Número de telefone </span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="{{ asset('img/icones/envelope.png') }}" alt=""
                                    style="max-width: 52px;">
                                <h6>sif.info3@gmail.com<br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-5">
                    <div class="container">
                        <div class="form-container">
                            <h2 class="text-center">Cadastrar</h2>
                            <form id="myForm" action="/inicio" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"
                                                style="color: #333;"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        placeholder="Nome" required>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"
                                                style="color: #333;"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="email" placeholder="Email"
                                        required autocomplete="email" class="@error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tag"
                                                style="color: #333;"></i></span>
                                    </div>
                                    <select class="form-control" id="tipo" name="tipo" onchange="showFields()"
                                        required>
                                        <option value="">Selecione...</option>
                                        <option value="empreendedor">Empreendedor</option>
                                        <option value="investidor">Investidor</option>
                                    </select>
                                </div>

                                <div class="addField">

                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                @include('sweetalert::alert')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('Js/validate.js') }}"></script>

<script>
    function showFields() {
        var tipo = document.getElementById('tipo').value;
        var empreendedorFields = document.getElementById('empreendedorFields');
        var investidorFields = document.getElementById('investidorFields');
        $('.addField').html('');
        if (tipo === 'investidor') {
           // empreendedorFields.style.display = 'block';
            //investidorFields.style.display = 'none';
            let groupFields= `
                                   <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"
                                                    style="color: #333;"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            name="contactoinvestidor" placeholder="contactoinvestidor">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-business-time"
                                                    style="color: #333;"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            id="areasDeInteresseDeInvestimento" name="areasDeInteresseDeInvestimento"
                                            placeholder="Áreas de Interesse de Investimento">
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file-invoice-dollar"
                                                    style="color: #333;"></i></span>
                                        </div>
                                        <textarea class="form-control" id="historicoDeInvestimento" name="historicoDeInvestimento"
                                            placeholder="Histórico de Investimento"></textarea>
                                    </div>
                                </div>
            `;
            $('.addField').append(groupFields);
        } else if (tipo === 'empreendedor') {
         //   empreendedorFields.style.display = 'none';
           // investidorFields.style.display = 'block';
            let groupFields= `
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"
                                                    style="color: #333;"></i></span>
                                        </div>
                                        <input type="text" class="form-control"
                                            name="contactoempreendedor" placeholder=" digite o seu Contacto" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-history"
                                                    style="color: #333;"></i></span>
                                        </div>
                                        <textarea class="form-control" id="hestoricoDeEmpreendedorismo" name="hestoricoDeEmpreendedorismo"
                                            placeholder="Histórico de Empreendedorismo"></textarea>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-file-alt"
                                                    style="color: #333;"></i></span>
                                        </div>
                                        <textarea class="form-control" id="projectoActual" name="projectoActual" placeholder="Projeto Atual"></textarea>
                                    </div>

            `;
            $('.addField').append(groupFields);
        } else {
            $('.addField').html('');
        }
    }
    document.addEventListener("DOMContentLoaded", function() {
        let input = document.getElementById("contacto");

        // Função para bloquear o caractere '-'
        input.addEventListener("keypress", function(event) {
            if (event.key === '-') {
                event.preventDefault();
            }
        });

        // Função para remover o caractere '-' se for colado
        input.addEventListener("input", function(event) {
            input.value = input.value.replace(/-/g, '');
        });
    });
</script>
@endsection

@section('footer')
@endsection
