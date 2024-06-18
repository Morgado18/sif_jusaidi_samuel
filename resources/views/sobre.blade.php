@extends('templates.main')

@section('title', 'SIF')

@section('header')
    @section('name', 'Visitante')
@endsection

@section('content')
<div class="container my-5">
    <div class="row">
        <!-- Seção de Sobre Nós -->
        <div class="col-lg-6 text-center mb-4 mb-lg-0">
            <!-- Imagem ou slideshow atraente -->
            <img src="{{ asset('img/icones/bg_welcome.jpg') }}" class="img-fluid rounded" alt="Imagem Atraente">
        </div>
        <div class="col-lg-6">
            <!-- Informações sobre a empresa -->
            <div class="sobre-info p-4 bg-light rounded">
                <h2 class="section-heading text-uppercase mb-4">Sobre Nós</h2>
                <p class="text-muted">Conheça nossa história e nossos valores.</p>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Fundado em 2024, o Sistema Intermediário de Financiamento (SIF) nasceu com a missão de conectar empreendedores visionários com investidores que buscam oportunidades promissoras. Nosso objetivo é facilitar o crescimento e a inovação, oferecendo uma plataforma segura e eficiente onde ideias brilhantes podem se transformar em projetos de sucesso.
                        </p>
                        <p>
                            Desde o início, nos dedicamos a criar um ambiente que promove a transparência e a confiança. Acreditamos que o apoio a novas iniciativas e a cooperação entre investidores e empreendedores são essenciais para o desenvolvimento econômico e a geração de impacto positivo na sociedade.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            Nosso sistema permite que empreendedores registrem seus projetos e que investidores acessem informações detalhadas sobre o histórico de investimentos. Além disso, oferecemos ferramentas de comunicação que facilitam a interação direta entre as partes envolvidas, garantindo um fluxo de informações claro e eficiente.
                        </p>
                        <p>
                            Com um compromisso inabalável com a segurança, desempenho e compatibilidade, nossa plataforma está equipada com as mais recentes tecnologias para proteger os dados dos usuários e garantir uma experiência de uso fluida em diversos dispositivos e navegadores.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .sobre-info {
    background-color: #ffffff;
    border-radius: 5px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.section-heading {
    font-size: 1.75rem;
    font-weight: bold;
    color: #333;
}

.text-muted {
    color: #6c757d;
}

</style>
@endsection

@section('footer')
@endsection
