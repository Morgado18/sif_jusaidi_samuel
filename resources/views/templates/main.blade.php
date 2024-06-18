<!DOCTYPE html>
<html lang="Pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Links da nossa aplicação web --}}

    {{-- Fontes da nossa app --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-brands-400.ttf') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-brands-400.woff2') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-regular-400.ttf') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-regular-400.woff2') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-solid-900.ttf') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-solid-900.woff2') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-v4compatibility - Copia.woff2') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-v4compatibility.ttf') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/fa-v4compatibility.woff2') }}">


    {{-- links que parecem necessários --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome para ícones -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->

    {{-- Bootstrap --}}
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset('Booststrap/bootstrap.js') }}">
    <link rel="stylesheet" href="{{ asset('Booststrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Booststrap/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset('Booststrap/popper.min.css') }}">


    {{-- css --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flex-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/jquery/jquery.js') }}">
    <link rel="stylesheet" href="{{ asset('vendor/jquery/jquery.min.js') }}">
    <link rel="stylesheet" href="{{ asset('vendor/jquery/jquery.js') }}">
    <link rel="stylesheet" href="{{ asset('vendor/jquery/jquery.slim.js') }}">
    <link rel="stylesheet" href="{{ asset('vendor/jquery/jquery.slim.min.js') }}">





    <title>@yield('title')</title>
</head>

<body>
    @yield('header')

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="fa fa-envelope"></i> sif.info3@gmail.com</li>

                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo TIPO ***** -->
                        <a href="#" class="logo">
                            <h1><img src="{{ asset('img/icones/SIF.png') }}"
                                    style="max-width: 150px; max-height: 150px;" alt="Logotipo"></h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="inicio" class="active">Início</a></li>
                            <li><a href="sobre">Sobre Nós</a></li>
                            <li><a href="fale_connosco">Fale Connosco</a></li>
                            <li><a href="inform">Informações</a></li>

                            <li><a href="/form"><i class="bi bi-person"></i> @yield('name')</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    {{-- Bootstrap JS, Popper.js, e jQuery (Necessários para componentes Bootstrap --}}
    <script src="Js/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


    {{-- links do java Script --}}


    @yield('content')

    @yield('footer')
    <style>
        .services {
            text-align: center;
        }

        .services h2 {
            color: #1a237e;
            font-size: 2em;
            margin-bottom: 30px;
        }

        .footer {
            background-color: #1a237e;
            color: #ffffff;
            padding: 20px 0;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer .col-md-3 {
            margin-bottom: 20px;
        }

        .social-icons .fab {
            font-size: 24px;
            margin-right: 10px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
    </div><br><br><br>
    <div class="sponsors-section">
        <h2>Apoios</h2>
        <div class="marquee">
            <div class="marquee-content">
                <div class="sponsor">
                    <img src="{{asset('img/icones/SIF.png')}}" alt="Patrocinador 6">
                </div>
                <div class="sponsor">
                    <img src="{{asset('https://lh3.googleusercontent.com/pw/AP1GczNDhap2dqpOdBbDN0CjsPC0CWhcV3er2d2ZgvnOSH9j2e7fjDXyxGDudiZHhGMF_LDPaCJXBiK8yrQfsqYKa21dPJSF-XvPf88_OygPQ_YaidnqLlyv5GG6_eNfKkuT5HKE4mbK1H0hnXyMOK6QLabnXc-S78_nfeFjrhvfmhngkILW6L6A2ljpcOtsFNvyYjazdXrf5QITMUROmr0TTarZS-QFj9Zjkyjl_g72jUIOlzRCqtxNkKYUfYPi2PxD8gXuroRPihc-JbLaJIXqgejnQlJPzVRr-3_OyBa67-b7Wb_x4nNyOqbk9fPyqljT7QPg8KgIOcCJiN--IkVJ_RM-WDezEQGWHisrgwxPQWH-1sJjGDi7XPcRPFN5Dqw52mxC1mO2jaFzSVuyVV9FXfdBPXL0_8faaRJA8pGC7sDVwm-STEfZA24MTLtUnSvkGCVMEVVqMtGFxhg6k7AJs9ux_O-fwVMwh9b4SlZbpkRiPNGCKfUU79XEsMc23JY6S66llSeWkKeZIdhEXdtDni270Fbp4m6dKdfsSuzFatj9Jw-dj34QPEaS78OxaSfcO13bEHBB1WeL6oVrlFOtqs9H285WZuLXXadEioxFtItUZq-iFTzzvHiVag9mEhUQ_DYSFFGE9nuy5rnA8_fLDnUir8sQvGxlz6GIYVcPOZNwSFU-P4dImEe2Kqp-DnmRI8-w4E2HoZgL-4rW04uTXZlcR3EyGOlDwiwcUauvyZgJ58w-fuztQXVX3lRmMj2bGemqYiXT2MdU2W7N_-nGmDqRlav1w_kz25iKsqxZzIu20upSeYN3XScr-0eL6lQq4VpuQ0DxVfd1RnkInwz4VMGIrcbQyIA2e-ZC6cC7AmH3MUdf2Y2x-_CDEpyZfQQes4Qqo4b2g1QNXOKfI_8qXtbQZA=w449-h380-s-no-gm?authuser=0')}}" alt="Patrocinador 1">
                </div>
                <div class="sponsor">
                    <img src="{{asset('https://lh3.googleusercontent.com/pw/AP1GczOwQ4dylNNpH2E58BOeAHbM2UC12hq_4GmYtSwb4rF8Pu6QcSooPQVmlGM28QQBtUMv5tu1jS9MhEEhi58kK8y2NkUnMOahDStU7z4uerzRk0GenXCl0UP8c6ABCmLO3wlsAqlb7SzKkvDa6yRgXyaNBCxE2vqEq_oH6_j3CgB9MWBmecN5eYHOQIu-Q3qXN2hBd05skMr-UMcqJkWbGGnP-NwqNLave0gvkPwPZ8cKjld_TK8WgMpQ1OGm4MR-sbdTdTrZUSAkhPnVHO-IT6Aj2CrKzGVDy1xjW6oOPgoSTEB24Ij2ze9CZzUqwC9OI0BkjMKKlcJVDsCm97UN0H9XcopRKM4uEqQBlVlLT4SMcVRjd2RnBQQZacuZQ_SOCF50QStKHvj7UiLtWWyKx-x3JjYltpNth9cvwErw-dURpnJcMarX07LnVY2KX8MUdJNSf8B_zTyay_ujGFPZB1FRH8GyMf5zYO3rj0D76q7g2bxDmtKytjkvKBD7hxCJarOwwNkjJ66w3c5VIHM3Qd3BfpswLcBlb45O1fvVOcxn8gAVF-MuU4E-1_O0hG9tVDsFsOxtU2t_jy0y1wQCUk12B_exOoyCWOt8TM1wpHCy0XRSDgTJI7aLi9rDN4pR47AI3f4JdcSsDFiD2L6r6BOqEw18_ydE-a01bZXOXOkRZSVjPTkmhUfRREYTJFaJM-pbxrqR_Epaglpwcz_8ub1a2br6c5dgY2Ka7VzwowvCfANMXIPPUYw1Q8ZpYyDmfZ1weKYf-nuKtkOia1mBDwVBqMMRQrPw5mcJuonZvASIL0E1H1wvl00UK8crSyK9Gy3lobAuDA-fEGmKElxxqq0N__-N5LDK_mI_ILfP2580gXywTKbCwy9fUfimaBKDGFvQ3H4cGhqiaug4MQ0867USLLo=w83-h56-s-no-gm?authuser=0')}}" alt="Patrocinador 4">
                </div>
                <div class="sponsor">
                    <img src="{{asset('https://lh3.googleusercontent.com/pw/AP1GczPlYYSeIW7h_HHA4CTjB2rpqa73LNYXXNhEivrI1Agz23DhS0eKkHAeUeqrxNxrlfQ8UX5ExO6EMl3YME3AvTyL9fK5oSewLeOnwkt8epZPFWZEzYJLbtBgZob00sltqdQv1y9CP8Fp5DvWC-l4DOoEnxIvpBIEd6yQSbrEK23TGPnC4-ZbGBFFfS__plGEmWXQKptyZYFFZLyXcjmOyTZE2961h-ieWkX96_26dSccQyHoSE0szXRGZE2jw3ww1ANAfDPho6v_87geCdTwYBMGmuawd5jFXo2t54Nq3k-VJa5PQipyVf7sWh4tpaJaSL5p7D0O5OLd4EnJmruqPuU_wrroV4sxt5q5Z6Dz7Kq8KSsnazEYFto0wiQx60AqqQwhn1pD8iV9_CTvHuU3LOvLJy4brBVilr3wp743ECuFXbqZznMI_-W_kDKhmXXFsqpRF4lDhdF0lC9WIqVKZ4F0cx5llMrvThsVLxZJoXZQVK1GwLRhKxlFgdjOz2Ola5sO_1nN-EgbPsEOhV9tgEyZt_kKUQl6VZjbOrb7jYPYAIo_d8IopWUkaYpujiRHBTuvdCw_no_y2KxGwt4Yt7_gFHZSc5Hnn8dqmz7C7PR5vbdlm-T_RJS6qwp_kFKgl50S24SKuZ4IXixFLNUgThqLpFhB5QEl5doNrDhI5Czil2QBdo4sd-OvL5z2ECk4XB2p5Iz50qxqXRQc4-FW4C1CtwgQqD624U2Hy0P8_fLmsGERM5q0DqCPgvgeLzDsKuNgTYZxp_1xSTUasMCD_flCAzemLpf9Uny3NcEmFACDbVZrWs5s6Rjm9FDNOfjfRdxV5jUDIl6mXr_Cm71wWvOIuDZYtFpoH-lLnNyKjrSW6AQP9l4P8WcXgixyhBjjOF0YORiPEOQP13lL_tbrQWSbMCM=w1003-h370-s-no-gm?authuser=0')}}" alt="Patrocinador 3">
                </div>

                <div class="sponsor">
                    <img src="{{asset('https://lh3.googleusercontent.com/pw/AP1GczMToTgvMlPm3mdouHkfnNhq5doee9WwtbbRi_x89Ybg8_HfRLgVBgP0zB8GS4--hprom0wBYYb-9C4pCteg-5YHAfn9jBGJOfiRhn-iZdPebTGKs7KP_8h6o_vCRHh8uWvjA7YZjFTCGx07jEQ_0vT_0eda35c3wi1aDBv08DcBqHZrssew2yS34reLBI1O68ENC_MPnMg1n-nxgIaYJMmiWXBFlf0NL4_Q-XGv_QXfJsukJTgW1IUqfdEjv_DZpv7EtR8wLY8y4tdKusilMxWbr3zarYvEAQgWWZZ7IFf8hvmzaXpe4A89YUdB7NZU4ncjkPq9RJ--su7a2tqzi_Owet2b0Apkb3nV41X3M5eVDyWGByd1PWzZDi1aZynVSYHCgE6olPV7G6titg2q4TtYmFbg7uotywBxkN4GHOlbrDUXGIBTt_KUvv-QWeXHEcd5AknqlGUgWpE8xYljkQp40u5Kcpng-oAhlSvPDkQBXsil95cg3wjVES0xNotmVHsPhrGupbD5Z2ioF69duNfnEatRutQPxpfpQ7rXpvk9w8LkEzqjvGr_DRuGmKkcVMMCtIBY1MlvdIvLxoV8sAOL02nWkuK8vWwXxJQbmWbebrVbMlEgxRXfiHWcOso-4B_MNNDSsv5YJa4j_C1rq_svcAmTmw_SfBJonvpqaWkkfj-0Wpg3DiWYxFRyqFn_tNdEKI--rB07hq_uRs4Fs3g75v2ts6bsL5W7-T32TvCf_w4qEG_nD3uLJfZS_shDMrWy4uvY2fObTk0XwWDS5q8uu3Kg_ygWBhWLb5nrpMJZgejq2tf2suxBhRzsyirfxWP7Q0zZn6Qq1xHG9CYUuf_Yj4WwZuxRhKDeZmDeSMpA1TP3ILsabVWGHsBNmvji_MIbNP8YcLqeg7WAewFf6QoR2A=w1367-h310-s-no-gm?authuser=0')}}" alt="Patrocinador 2">
                </div>



                <!-- Adicione mais patrocinadores conforme necessário -->
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="footer mt-auto py-5" style="background-color:   #1a237e; color: #4400ff;">
        <center>
            <h2><strong>Nossos Serviços</strong></h2>
        </center>
        </section>

        <div id="sobre-nós">
            <!-- Conteúdo da seção "Sobre Nós" -->
        </div>


        <footer class="footer mt-auto py-5">
            <center>
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="text-light"><strong>Links Úteis</strong></h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Página Inicial</a></li>
                            <li><a href="#" class="text-white">Projectos</a></li>
                            <li><a href="#" class="text-white">Sobre Nós</a></li>
                            <li><a href="tell: +244 942404724" class="text-white">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="text-light"><strong>Recursos</strong></h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Termos de
                                    Financiamento</a></li>
                            <li><a style="text-decoration: none;" href="#" class="text-white">Política de
                                    Privacidade</a></li>
                            <li><a style="text-decoration: none;" href="#accordion-button"
                                    class="text-white">Perguntas
                                    Frequentes</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Seção de Contato -->
                    <div class="col-md-3">
                        <h5 class="text-light"><strong>Contato</strong></h5>
                        <ul class="list-unstyled">
                            <li><span class="text-white">Email:</span> <a style="text-decoration: none;"
                                    href="mailto:sif.info3@gmail.com" class="text-white">sif.info3@gmail.com</a></li>
                            <li><span class="text-white">Telefone: <a style="text-decoration: none;"
                                        href="tel:+244-924-404-724">+244
                                        942404724</a> </span> </li>
                        </ul>
                    </div>
                    <!-- Seção de Redes Sociais -->
                    <div class="col-md-3">
                        <h5 class="text-light"><strong>Siga-nos</strong></h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a style="text-decoration: none;" href="#"
                                    class="text-white"><i class="bi bi-facebook">Facebook</i></a></li><br>
                            <li class="list-inline-item"><a style="text-decoration: none;" href="#"
                                    class="text-white"><i class="bi bi-twitter">Twitter</i></a></li><br>
                            <li class="list-inline-item"><a style="text-decoration: none;" href="#"
                                    class="text-white"><i class="bi bi-instagram">Instagram</i></a></li><br>
                        </ul>
                    </div>
                </div>
            </center>
            <!-- Linha de Separação -->
            <hr>
            <!-- Rodapé -->

                    <p style="color: #ffffff;"><div class="row">
                <div class="col-md-12 text-center"><script>
              document.write(new Date().getFullYear())
            </script>&copy; Sistema Intermediário de Financiamento. Todos os direitos
                        reservados.

                    </p>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS, Popper.js, e jQuery (Necessários para componentes Bootstrap) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


        {{-- links do java Script --}}
        <script src="{{ asset('Js/SlideDeEntrada.js') }}"></script>
        <script src="{{ asset('Js/owl-carousel.js') }}"></script>
        <script src="{{ asset('Js/isotope.min.js') }}"></script>
        <script src="{{ asset('Js/custom.js') }}"></script>
        <script src="{{ asset('Js/counter.js') }}"></script>
        <script src="{{ asset('Js/novoformulario.js') }}"></script>
        <script src="{{ asset('Js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

</body>

</html>
